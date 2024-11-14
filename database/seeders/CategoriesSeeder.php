<?php

namespace Database\Seeders;

use App\Models\V1\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->categories() as $category) {
            $condition = [
                "slug" => $category["slug"],
                "parent_id" => $category["parent_id"],
            ];
            Category::query()
                ->updateOrCreate($condition, $category);
        }
    }

    private function categories(): array
    {
        return [
            [
                "slug" => "fashion",
                "name" => "fashion",
                "fa_name" => "لباس",
                "description" => "",
                "parent_id" => null,
            ],
            [
                "slug" => "women",
                "name" => "women",
                "fa_name" => "زنانه",
                "description" => "",
                "parent_id" => 1,
            ],
            [
                "slug" => "children",
                "name" => "children",
                "fa_name" => "بچه گانه",
                "description" => "",
                "parent_id" => 1,
            ],
            [
                "slug" => "men",
                "name" => "men",
                "fa_name" => "مردانه",
                "description" => "",
                "parent_id" => 1,
            ],
        ];
    }
}
