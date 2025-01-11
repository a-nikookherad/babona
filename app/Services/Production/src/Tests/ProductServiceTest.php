<?php

namespace Production\Tests;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Production\Entities\Models\Basket;
use Production\Entities\Models\Category;
use Production\Entities\Models\Product;
use Production\Entities\Repositories\product\ProductRepo;
use Production\Production;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    public function test_product_service(): void
    {
//        $this->withoutExceptionHandling();

        $currentUser = $this->userLogin($user_id = 1);

        $data = $this->prepareDataForCreatingProduct();

        //create fake request data for creating product
        $thumbnail = UploadedFile::fake()->image("thumbnail.jpg");
        $file1 = UploadedFile::fake()->image("test1.jpg");
        $file2 = UploadedFile::fake()->image("test2.jpg");
        $request = fakeRequest($data, [
            "thumbnail" => $thumbnail,
            "images" => [$file1, $file2]
        ]);

        $this->assertCreateProduct($request, $currentUser);

        $this->assertListProducts();

        $product = $this->getLatestProduct();

        $this->assertAddProductToTheBasket($product);


        //create fake request data for editing product
        $file = UploadedFile::fake()->image("test.jpg");
        $fileEdited = UploadedFile::fake()->image("test2_edited.jpg");
        $request = fakeRequest($data, [
            "thumbnail" => $file,
            "images" => [$fileEdited]
        ]);
        $this->assertEditProduct($product, $request, $currentUser);

        $this->assertDeleteProduct($product);
    }

    public function setUp(): void
    {
        parent::setUp();
        Schema::disableForeignKeyConstraints();
        Artisan::call("migrate");
    }

    public function _tearDown(): void
    {
        Artisan::call("migrate:rollback");
        parent::tearDown();
    }


    private function prepareDataForCreatingProduct(): array
    {
        $category = Category::factory()
            ->create();

        $data = [
            "slug" => "test",
            "name" => "test",
            "fa_name" => "تست",
            "material" => "کتان",
            "style" => "مام استایل",
            "code" => "123tgp",
            "barcode" => "3057430503409",
            "status" => "published",
            "brief" => "کیفیت این محصول نسبت به قیمت بسیار بالا می باشد",
            "description" => "شلوار با جنس کتان می باشد که فری سایز می باشد",
            "jsonld" => json_encode(["size" => "free"]),
            "meta_tag_title" => "meta tag title for test",
            "meta_tag_description" => "meta tag description for test",
            "meta_tag_keywords" => "meta tag keywords for test",
            "category_id" => $category->id,
            "product_details" => [
                [
                    "size" => "S, M",
                    "color" => "red",
                    "price" => 199000,
                    "discount" => 0,
                    "quantity" => 20,
                    "net_price" => 150000,
                    "discount_expired_at" => null,
                ],
                [
                    "size" => "L, Xl, XXl",
                    "color" => "red, blue, green, yellow",
                    "price" => 299000,
                    "discount" => 30000,
                    "quantity" => 30,
                    "net_price" => 250000,
                    "discount_expired_at" => now()->addDays(2)->format("Y-m-d H:i:s"),
                ],
            ],
            "tags" => [
                [
                    "name" => "new",
                    "description" => "arrived new product"
                ],
                [
                    "name" => "off",
                    "description" => "product with 50 percent off"
                ]
            ],
        ];
        return $data;
    }

    private function assertCreateProduct($request, $currentUser)
    {
        //product assertions
        $product = Production::createProduct($request, $currentUser);
        $this->assertTrue($product->exists);

        //product thumbnail assertions
        $thumbnail = $product->thumbnail()->first();
        $this->assertNotEmpty($thumbnail);
        Storage::disk("public")
            ->assertExists($thumbnail->path . "/" . $thumbnail->full_name);

        //product images assertions(that would be 3 assertions)
        $attachments = $product->attachments()->get();
        $this->assertTrue($attachments->isNotEmpty());
        foreach ($attachments as $attachment) {
            Storage::disk("public")
                ->assertExists($attachment->path . "/" . $attachment->full_name);
        }

        //product details assertions
        $productDetails = $product->productDetails()->get();
        $this->assertTrue($productDetails->isNotEmpty());
        $this->assertTrue($productDetails->count() == count($request->product_details));

        //product tag assertions
        $tag = tempTags($product)->getActiveTag("new");
        $this->assertNotEmpty($tag);
        $tag2 = tempTags($product)->getActiveTag("off");
        $this->assertNotEmpty($tag2);
        $this->travelTo(now()->addDays(8));
        $tag = tempTags($product)->getActiveTag("new");
        $this->assertNull($tag);
        $tag2 = tempTags($product)->getActiveTag("off");
        $this->assertNull($tag2);
    }

    private function assertListProducts()
    {
        $products = Production::products(function ($query) {
            return $query->where("status", "published");
        }, 10);
        $this->assertTrue(count($products->items()) > 0);
    }

    private function assertEditProduct($product, $request, $currentUser)
    {
        $request->merge([
            "slug" => "test_edited",
            "style" => "مام استایل ویرایش شده",
            "product_details" => [
                [
                    "size" => "S, M",
                    "color" => "red",
                    "price" => 199000,
                    "discount" => 0,
                    "quantity" => 20,
                    "net_price" => 170000,
                    "discount_expired_at" => null,
                ],
                [
                    "size" => "xxl",
                    "color" => "brown",
                    "price" => 600000,
                    "discount" => 10000,
                    "discount_percentage" => 5,
                    "quantity" => 20,
                    "net_price" => 500000,
                    "discount_expired_at" => now()->addDays(9)->format("Y-m-d H:i:s"),
                ],
            ],
            "tags" => [
                [
                    "name" => "new2",
                    "description" => "arrived new product"
                ],
                [
                    "name" => "off2",
                    "description" => "product with 50 percent off"
                ]
            ],
        ]);

        Production::editProduct($product->id, $request, $currentUser);
        $product = ProductRepo::getById($product->id);
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($product->toArray(), $request->all(), ["slug", "style"]);

        //product tag assertions
        $tag = tempTags($product)->getActiveTag("new2");
        $this->assertNotEmpty($tag);
        $tag2 = tempTags($product)->getActiveTag("off2");
        $this->assertNotEmpty($tag2);
        $this->travelTo(now()->addDays(8));
        $tag = tempTags($product)->getActiveTag("new2");
        $this->assertNull($tag);
        $tag2 = tempTags($product)->getActiveTag("off2");
        $this->assertNull($tag2);
    }

    private function assertAddProductToTheBasket($product)
    {
        foreach ($product->productDetails as $productDetail) {
            $productDetails [$productDetail->id] = 4;
        }
        Production::addToTheBasket(Auth::user()->id, $productDetails);

        $basketData = [
            "user_id" => 1,
            "bought_at" => now()->format("Y-m-d H:i:s"),
        ];
        $basket = Basket::query()
            ->create($basketData);
        $product->productDetails()->each(function ($productDetail) use ($basket) {
            $productDetail->baskets()->attach([$basket->id => ["quantity" => 16]]);
        });
    }

    private function assertDeleteProduct($product): void
    {
        $allow = Production::destroyProduct($product);
        $this->assertFalse($allow);

        $product = ProductRepo::getById($product->id);
        $this->assertNotEmpty($product);
    }

    private function userLogin($id)
    {
        $user = User::query()
            ->where("id", $id)
            ->firstOr(function () use ($id) {
                return User::factory()
                    ->create([
                        "id" => $id,
                    ]);
            });
        Auth::login($user);
        return $user;
    }

    private function getLatestProduct(): mixed
    {
        return Product::query()
            ->latest("created_at")
            ->first();
    }
}
