<?php

namespace Production\Tests\Feature;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Production\Entities\Models\Product;
use Production\Entities\Repositories\category\CategoryRepo;
use Production\Entities\Repositories\product\ProductRepo;
use Production\Production;
use Tests\TestCase;

class ProductCrudTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
//        $this->withoutExceptionHandling();
        Artisan::call("migrate");
    }

    public function tearDown(): void
    {
//        Artisan::call("migrate:rollback");
        parent::tearDown();
    }

    public function _test_product_crud(): void
    {
        $merchant = Merchant::query()
            ->create([
                "name" => "test",
            ]);
        $this->userLogin(1, $merchant->id);

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
        $request = new \Illuminate\Http\Request;
        $request = $request->createFromBase(
            \Symfony\Component\HttpFoundation\Request::create(
                "test",
                "post",
                $data,
                [],
                [
                    "thumbnail" => $file,
                    "images" => [
                        $file1,
                        $file2,
                    ]
                ],
                [],

            )
        );


        $this->assertCreateProduct($request);

//        $this->assertListProducts();

//        $product = $this->getLatestProduct();

//        $this->assertEditProduct($product->id);

//        $this->assertUpdateProduct($product->id, $request);

//        $this->assertDeleteProduct($product->id);
    }


    private function assertCreateProduct($request)
    {
//        $response = $this->post(route("production.products.store"), $data);
//        $response->assertStatus(200);
        $product = Production::createProduct($request);
        $this->assertTrue($product->exists);
        Storage::assertExists($product->thumbnail->path . "/" . $product->thumbnail->full_name);
    }

    private function assertListProducts()
    {
//        $response = $this->get(route("production.products.list"));
//        $response->assertStatus(200);
        $products = Production::products(function ($query) {
            return $query->where("status", "published");
        }, 10);
        $this->assertNotNull($products);
    }

    private function assertEditProduct($product_id)
    {
        $response = $this->get(route("production.products.edit", ["id" => $product_id]));
        $response->assertStatus(200);
    }

    private function assertUpdateProduct($product_id, $request)
    {
        $request->merge(["name" => "test", "status" => "archive"]);
//        $response = $this->post(route("production.products.update", ["id" => $product_id]), $data);
//        $response->assertStatus(200);
        Production::editProduct($product_id, $request);
        $product = ProductRepo::getById($product_id)->toArray();
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($product, $request->all(), ["name", "status"]);
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
}
