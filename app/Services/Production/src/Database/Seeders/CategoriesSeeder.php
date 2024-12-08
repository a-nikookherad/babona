<?php

namespace Production\Database\Seeders;

use Illuminate\Database\Seeder;
use Production\Entities\Models\Category;

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
                "slug" => "clothing",
                "name" => "clothing",
                "fa_name" => "پوشاک",
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
