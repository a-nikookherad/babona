<?php

namespace Production\Tests\Feature;

use App\Models\User;
use Attachment\Entities\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Production\Entities\Models\Category;
use Production\Entities\Repositories\category\CategoryRepo;
use Production\Production;
use Tests\TestCase;

class CategoriesCrudTest extends TestCase
{
    public function _test_category_crud(): void
    {
        $parameters = [
            "slug" => "clothing",
            "name" => "clothing",
            "fa_name" => "پوشاک",
            "status" => "published",
            "description" => "for test",
            "jsonld" => json_encode(["name" => "test"]),
            "parent_id" => null,
        ];
        $file = UploadedFile::fake()->image("test.jpg");
        $request = new \Illuminate\Http\Request;
        $request = $request->createFromBase(
            \Symfony\Component\HttpFoundation\Request::create(
                "test",
                "post",
                $parameters,
                [],
                ["thumbnail" => $file],
                [],

            )
        );


        $this->assertCreateCategory($request);
        $this->assertListCategories();

        $category = $this->getLatestCategory();

//        $this->assertEditCategory($category->id);
        $request->merge(["name" => "test", "status" => "archive"]);
        $this->assertUpdateCategory($category->id, $request);
        $this->assertDeleteCategory($category->id);
    }

    public function setUp(): void
    {
        parent::setUp();
//        $this->withoutExceptionHandling();

        $path = Str::replace(base_path('\\'), "", __DIR__ . "/../../Database/Migrations/");
        Artisan::call("migrate", ["--path" => $path]);
        File::up();
    }

    public function tearDown(): void
    {
        Artisan::call("migrate:rollback");
        File::down();
        parent::tearDown();
    }


    private function assertCreateCategory($request)
    {
//        $response = $this->post(route("production.categories.store"), $data);
//        $response->assertStatus(200);
        Production::createCategory($request);
        $categories = CategoryRepo::all();
        $this->assertNotNull($categories);
    }

    private function assertListCategories()
    {
//        $response = $this->get(route("production.categories.list"));
//        $response->assertStatus(200);
        $categories = Production::categories();
        $this->assertTrue($categories->count() > 0);
    }

    private function assertEditCategory($category_id)
    {
        $response = $this->get(route("production.categories.edit", ["id" => $category_id]));
        $response->assertStatus(200);
    }

    private function assertUpdateCategory($category_id, $request)
    {
        Production::editCategory($category_id, $request);
//        $response = $this->put(route("production.categories.update", ["id" => $category_id]), $data);
//        $response->assertStatus(200);

        $category = CategoryRepo::getById($category_id)->toArray();
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($category, $request->all(), ["name", "status"]);
    }

    private function assertDeleteCategory($category_id): void
    {
//        $response = $this->delete(route("production.categories.delete", ["id" => $category_id]));
//        $response->assertStatus(200);
        Production::destroyCategory($category_id);
        $categoryExist = Category::query()
            ->where("id", $category_id)
            ->exists();
        $this->assertEquals(false, $categoryExist);
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
