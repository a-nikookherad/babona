<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            "id" => fake()->numberBetween(1, 20),
            "slug" => fake()->slug(2),
            "name" => fake()->name(),
            "fa_name" => fake()->randomElement([
                "شلوار گوچی مدل بگ",
                "مانتو ایرانیان مدل چرم",
                "پالتو پارسیان پوش مدل بارانی",
            ]),
            "material" => fake()->randomElement([
                "چرم",
                "کتان",
                "مخمل",
            ]),
            "style" => fake()->randomElement([
                "فیت بگ",
                "مام استایل",
                "مام فیت",
                "اسلیم",
            ]),
            "code" => fake()->uuid(),
            "barcode" => fake()->uuid(),
            "status" => fake()->randomElement([
                "waiting",
                "upcoming",
                "published",
                "archive",
            ]),
            "brief" => fake()->sentence(10),
            "description" => fake()->sentence(20),
//            "jsonld" => fake(),
            "meta_tag_title" => fake()->title(),
            "meta_tag_description" => fake()->sentence(),
            "meta_tag_keywords" => fake()->randomElement([
                "شلوار",
                "پیراهن",
            ]),
//            "category_id" => fake(),
        ];
    }
}
