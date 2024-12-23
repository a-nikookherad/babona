<?php

namespace Production\Tests\Feature;

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

class CategoryServiceTest extends TestCase
{
    public function _test_category_service(): void
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
        $request = (new \Illuminate\Http\Request)->createFromBase(
            \Symfony\Component\HttpFoundation\Request::create("/", "Post", $parameters, [], ["thumbnail" => $file], [])
        );


        $category = $this->assertCreateCategory($request);

        $request->merge(["name" => "test", "status" => "archive"]);
        $this->assertUpdateCategory($category->id, $request);
        $this->assertDeleteCategory();
    }

    public function _setUp(): void
    {
        parent::setUp();
//        $this->withoutExceptionHandling();

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


    private function assertCreateCategory($request)
    {
        $category = Production::createCategory($request);
        $categories = CategoryRepo::all();
        $this->assertNotEmpty($categories);

        return $category;
    }

    private function assertUpdateCategory($category_id, $request)
    {
        Production::editCategory($category_id, $request);

        $category = CategoryRepo::getById($category_id)->toArray();
        $this->assertArrayIsEqualToArrayOnlyConsideringListOfKeys($category, $request->all(), ["name", "status"]);
    }

    private function assertDeleteCategory(): void
    {
        $category = $this->getLatestCategory();
        $thumbnail = $category->thumbnail;

        Production::destroyCategory($category);
        $this->assertEmpty(Category::query()
            ->where("id", $category->id)
            ->first());

        $this->assertEmpty(File::query()
            ->where("id", $thumbnail->id)
            ->first());
        Storage::disk("public")
            ->assertMissing($thumbnail->path . "/" . $thumbnail->full_name);
    }

    private function getLatestCategory(): mixed
    {
        return Category::query()
            ->with("thumbnail")
            ->latest()
            ->first();
    }
}
