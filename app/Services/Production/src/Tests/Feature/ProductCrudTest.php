<?php

namespace Production\Tests\Feature;

use App\Models\User;
use Finance\Entities\Models\Wallet;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Production\Entities\Models\Product;
use Production\Entities\Repositories\category\CategoryRepo;
use Production\Entities\Repositories\product\ProductRepo;
use Tests\TestCase;

class ProductCrudTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
//        Artisan::call("migrate", ["--path" => "app/Services/Production/src/Database/Migrations/2024_11_02_210129_create_categories_table.php"]);
//        Artisan::call("migrate", ["--path" => "app/Services/Production/src/Database/Migrations/2024_11_02_210344_create_products_table.php"]);
//        Artisan::call("migrate", ["--path" => "app/Services/Production/src/Database/Migrations/2024_11_02_210344_create_storehouses_table.php"]);
//        Artisan::call("migrate", ["--path" => "app/Services/Production/src/Database/Migrations/2024_11_02_210345_create_prices_table.php"]);
        $this->userLogin($id = 1);
    }

    public function tearDown(): void
    {
//        Artisan::call("migrate:rollback");
        parent::tearDown();
    }

    public function test_product_crud(): void
    {
        $user = Auth::user();
        $data = [
            "slug" => "clothing",
            "name" => "clothing",
            "fa_name" => "clothing",
            "description" => "clothing",
            "status" => "published",
        ];
        $category = CategoryRepo::store($data);

        $data = [
            "name" => "toman",
            "fa_name" => "تومان",
            "instrument" => "tmn",
            "is_default" => true,
            "is_permanent" => true,
            "interest_rate" => 1,
        ];
        $wallet = Wallet::query()
            ->create($data);

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
            "user_id" => $user->id,
            "category_id" => $category->id,
            "size" => "free size",
            "color" => "red",
            "quantity" => 120,
            "is_active" => true,
//            "add_by_user_id" => $user->id,
            "price" => 600000,
            "wallet_id" => $wallet->id,
            "discount" => 0.01,
            "expired_at" => now()->addDays(2)->format("Y-m-d H:i:s"),
            "tag_name" => "#clothing #mom_style",
            "tag_description" => "free size pants",
            "keywords" => "mom_style",
            "campaign_id" => null,
        ];
        $this->assertAddProduct($data);

        $this->assertListProducts();

//        $product = $this->getLatestProduct();

//        $this->assertEditProduct($product->id);

//        $this->assertUpdateProduct($product->id, $data = array_merge($data, ["name" => "test", "status" => "archive"]));

//        $this->assertDeleteProduct($product->id);
    }


    private function assertAddProduct(array $data)
    {
        $response = $this->post(route("production.products.store"), $data);
        $response->assertStatus(200);
        $products = ProductRepo::all();
        $this->assertFalse($products->isEmpty());
    }

    private function assertListProducts()
    {
        $response = $this->get(route("production.products.list"));
        $response->assertStatus(200);
    }

    private function assertEditProduct($product_id)
    {
        $response = $this->get(route("production.products.edit", ["id" => $product_id]));
        $response->assertStatus(200);
    }

    private function assertUpdateProduct($product_id, array $data)
    {
        $response = $this->post(route("production.products.update", ["id" => $product_id]), $data);
        $response->assertStatus(200);

        $product = ProductRepo::getById($product_id)->toArray();
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($product, $data, ["name", "status"]);
    }

    private function assertDeleteProduct($product_id): void
    {
        $response = $this->delete(route("production.products.delete", ["id" => $product_id]));
        $response->assertStatus(200);

        $productCount = Product::query()
            ->where("id", $product_id)
            ->count();
        $this->assertEquals(0, $productCount);
    }

    private function userLogin($id): void
    {
        $user = User::query()
            ->firstOrCreate(["id" => 1], ["password" => bcrypt("teat")]);
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
