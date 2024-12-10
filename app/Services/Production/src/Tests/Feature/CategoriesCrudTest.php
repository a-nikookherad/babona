<?php

namespace Production\Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Production\Entities\Models\Category;
use Tests\TestCase;

class CategoriesCrudTest extends TestCase
{
    public function test_category_crud(): void
    {
//        $this->withoutExceptionHandling();
        Artisan::call("migrate");

        $this->userLogin();
        $data = [
            "slug" => "test",
            "name" => "name",
            "fa_name" => "تست",
            "status" => "published",
            "description" => "for test",
            "jsonld" => json_encode(["name" => "test"]),
            "parent_id" => null,
        ];
        $response = $this->post(route("production.categories.store"), $data);
        $response->assertStatus(200);

        $response = $this->get(route("production.categories.list"));
        $response->assertStatus(200);

        $category = Category::query()
            ->latest()
            ->first();
        $response = $this->get(route("production.categories.edit", ["id" => $category->id]));
        $response->assertStatus(200);

        $response = $this->post(route("production.categories.update", ["id" => $category->id]), array_merge($data,["name" => "test", "status" => "archive"]));
        $response->assertStatus(200);
    }


    private function userLogin(): void
    {
        $user = new User();
        $user->id = 1;
        Auth::login($user);
    }
}
