<?php

namespace Production\Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Production\Entities\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            "slug" => fake()->slug,
            "name" => fake()->name,
            "fa_name" => fake()->name,
            "description" => fake()->text,
            "status" => fake()->randomElement([
                "waiting",
                "published",
                "archive",
            ]),
//            "jsonld" => fake(),
            "parent_id" => null,
        ];
    }
}
