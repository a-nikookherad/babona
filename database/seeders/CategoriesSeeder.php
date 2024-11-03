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
            $value = [];
            $condition = [];
            Category::query()
                ->updateOrCreate($condition, $value);
        }
    }

    private function categories(): array
    {
        return [
            [

            ],
        ];
    }
}
