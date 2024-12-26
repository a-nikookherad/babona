<?php

namespace Production\Tests\Feature;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Production\Entities\Models\Basket;
use Production\Entities\Models\Product;
use Production\Entities\Repositories\category\CategoryRepo;
use Production\Entities\Repositories\product\ProductRepo;
use Production\Production;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    public function _setUp(): void
    {
        parent::setUp();
        Artisan::call("migrate");
    }

    public function _tearDown(): void
    {
//        Artisan::call("migrate:rollback");
        parent::tearDown();
    }

    public function test_product_service(): void
    {
        $this->withoutExceptionHandling();

        $merchant = Merchant::query()
            ->create([
                "name" => "test",
            ]);
        $this->userLogin($user_id = 1, $merchant->id);

        $categoryData = [
            "slug" => "clothing",
            "name" => "clothing",
            "fa_name" => "clothing",
            "description" => "clothing",
            "status" => "published",
        ];
        $category = CategoryRepo::store($categoryData);

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
            "tag_name" => "#new, #off",
            "tag_description" => "new products",
        ];

        $file = UploadedFile::fake()->image("test.jpg");
        $file1 = UploadedFile::fake()->image("test1.jpg");
        $file2 = UploadedFile::fake()->image("test2.jpg");
        $request = $this->createRequest($data, $file, [$file1, $file2]);


        $this->assertCreateProduct($request);


        $this->assertListProducts();

        $product = $this->getLatestProduct();

        $this->addBasketToProduct($product);

        $this->assertEditProduct($product, $data);

//        $this->assertDeleteProduct($product->id);
    }


    private function assertCreateProduct($request)
    {
        //product assertions
        $product = Production::createProduct($request);
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
    }

    private function assertListProducts()
    {
        $products = Production::products(function ($query) {
            return $query->where("status", "published");
        }, 10);
        $this->assertTrue(count($products->items()) > 0);
    }

    private function assertEditProduct($product, $data)
    {
        $file = UploadedFile::fake()->image("test.jpg");
        $fileEdited = UploadedFile::fake()->image("test2_edited.jpg");
        $request = $this->createRequest($data, $file, [$fileEdited]);

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
            ]
        ]);

        Production::editProduct($product->id, $request);
        $product = (ProductRepo::getById($product->id))->toArray();
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($product, $request->all(), ["slug", "style"]);
    }

    private function assertDeleteProduct($product_id): void
    {
        /*        $response = $this->delete(route("production.products.delete", ["id" => $product_id]));
                $response->assertStatus(200);*/


        Production::destroyProduct($product_id);

        $product = ProductRepo::getById($product_id);

        $this->assertEmpty($product);
    }

    private function userLogin($id, $merchant_id): void
    {
        $user = User::query()
            ->firstOrCreate(["id" => $id], [
                "role" => "admin",
                "merchant_id" => $merchant_id,
                "password" => bcrypt("teat")
            ]);
        Auth::login($user);
    }

    private function getLatestProduct(): mixed
    {
        $product = Product::query()
            ->latest()
            ->first();
        return $product;
    }

    private function createRequest(array $data, $file, $images): \Illuminate\Http\Request
    {
        $request = new \Illuminate\Http\Request;
        $request = $request->createFromBase(
            \Symfony\Component\HttpFoundation\Request::create(
                "test",
                "post",
                $data,
                [],
                [
                    "thumbnail" => $file,
                    "images" => $images
                ],
                [],

            )
        );
        return $request;
    }

    private function addBasketToProduct(mixed $product): void
    {
        $basketData = [
            "user_id" => 1,
            "bought_at" => now()->format("Y-m-d H:i:s"),
        ];
        $basket = Basket::query()
            ->create($basketData);
        $product->productDetails()->first()->baskets()->attach([$basket->id => ["quantity" => 16]]);
    }
}
