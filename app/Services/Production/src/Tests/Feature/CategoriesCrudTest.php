<?php

namespace Production\Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Production\Entities\Models\Category;
use Production\Entities\Repositories\category\CategoryRepo;
use Tests\TestCase;

class CategoriesCrudTest extends TestCase
{
    public function test_category_crud(): void
    {
        $data = [
            "slug" => "test",
            "name" => "name",
            "fa_name" => "تست",
            "status" => "published",
            "description" => "for test",
            "jsonld" => json_encode(["name" => "test"]),
            "parent_id" => null,
        ];
        $this->assertAddCategory($data);
        $this->assertListCategories();

        $category = $this->getLatestCategory();

        $this->assertEditCategory($category->id);
        $this->assertUpdateCategory($category->id, $data = array_merge($data, ["name" => "test", "status" => "archive"]));
        $this->assertDeleteCategory($category->id);
    }

    public function setUp(): void
    {
        parent::setUp();
//        $this->withoutExceptionHandling();
//        Artisan::call("migrate", ["--path" => "app/Services/Production/src/Database/Migrations/2024_11_02_210129_create_categories_table.php"]);
        $this->userLogin($id = 1);
    }

    public function tearDown(): void
    {
//        Artisan::call("migrate:rollback", ["--path" => "app/Services/Production/src/Database/Migrations/2024_11_02_210129_create_categories_table.php"]);
        parent::tearDown();
    }


    private function assertAddCategory(array $data)
    {
        $response = $this->post(route("production.categories.store"), $data);
        $response->assertStatus(200);
        $categories = CategoryRepo::all();
        $this->assertNotNull($categories);
    }

    private function assertListCategories()
    {
        $response = $this->get(route("production.categories.list"));
        $response->assertStatus(200);
        $categories = CategoryRepo::all();
        $this->assertTrue($categories->count() > 0);
    }

    private function assertEditCategory($category_id)
    {
        $response = $this->get(route("production.categories.edit", ["id" => $category_id]));
        $response->assertStatus(200);
    }

    private function assertUpdateCategory($category_id, array $data)
    {
        $response = $this->put(route("production.categories.update", ["id" => $category_id]), $data);
        $response->assertStatus(200);

        $category = CategoryRepo::getById($category_id)->toArray();
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($category, $data, ["name", "status"]);
    }

    private function assertDeleteCategory($category_id): void
    {
        $response = $this->delete(route("production.categories.delete", ["id" => $category_id]));
        $response->assertStatus(200);

        $categoryCount = Category::query()
            ->where("id", $category_id)
            ->count();
        $this->assertEquals(0, $categoryCount);
    }

    private function userLogin($id): void
    {
        $user = new User();
        $user->id = $id;
        Auth::login($user);
    }

    private function getLatestCategory(): mixed
    {
        return Category::query()
            ->latest()
            ->first();
    }
}
