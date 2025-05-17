<?php

namespace Production\Tests\todo;

use App\Models\User;
use Attachment\Entities\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Production\Entities\Models\Category;
use Production\Entities\Repositories\category\CategoryRepo;
use Production\Production;
use Tests\TestCase;

class CategoriesCrudTest extends TestCase
{
    public function _test_category_crud(): void
    {
        $this->withoutExceptionHandling();
        $parameters = [
            "slug" => "clothing",
            "name" => "clothing",
            "fa_name" => "پوشاک",
            "status" => "published",
            "description" => "this description is for test",
            "jsonld" => json_encode(["name" => "test"]),
            "parent_id" => null,
        ];

        $category = $this->assertCreateCategory($parameters);
        $this->assertListCategories();
        $this->assertEditCategory($category->id);
        $data = array_merge($parameters, ["name" => "test", "status" => "archive"]);
        $this->assertUpdateCategory($category->id, $data);
        $this->assertDeleteCategory();
    }

    public function _setUp(): void
    {
        parent::setUp();

        $path = Str::replace(base_path('\\'), "", __DIR__ . "/../../Database/Migrations/");
        Artisan::call("migrate", ["--path" => $path]);
        File::up();
    }

    public function _tearDown(): void
    {
        Artisan::call("migrate:rollback");
        File::down();
        parent::tearDown();
    }


    private function assertCreateCategory($data)
    {
        $response = $this->post(route("production.categories.store"), $data);
        $response->assertStatus(200);
        $categories = CategoryRepo::all();
        $this->assertNotEmpty($categories);
    }

    private function assertListCategories()
    {
        $response = $this->get(route("production.categories.list"));
        $response->assertStatus(200);
        $categories = Production::categories();
        $this->assertTrue($categories->count() > 0);
    }

    private function assertEditCategory($category_id)
    {
        $response = $this->get(route("production.categories.edit", ["id" => $category_id]));
        $response->assertStatus(200);
    }

    private function assertUpdateCategory($category_id, $data)
    {
        $response = $this->put(route("production.categories.update", ["id" => $category_id]), $data);
        $response->assertStatus(200);

        $category = CategoryRepo::getById($category_id)->toArray();
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($category, $data, ["name", "status"]);
    }

    private function assertDeleteCategory(): void
    {
        $category = $this->getLatestCategory();
        $thumbnail = $category->thumbnail;

        $response = $this->delete(route("production.categories.delete", ["category" => $category->id]));
        $response->assertStatus(200);

        $this->assertEmpty(Category::query()
            ->where("id", $category->id)
            ->first());

        $this->assertEmpty(File::query()
            ->where("id", $thumbnail->id)
            ->first());
        Storage::disk("public")
            ->assertMissing($thumbnail->path . "/" . $thumbnail->full_name);
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
            ->with("thumbnail")
            ->latest()
            ->first();
    }
}
