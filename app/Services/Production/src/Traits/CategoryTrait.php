<?php

namespace Production\Traits;

use Production\Entities\Models\Category;

trait CategoryTrait
{
    public function categories()
    {
        return Category::query()
            ->get();
    }

    public function category($id)
    {
        return Category::query()
            ->where("id", $id)
            ->first();

    }

    public function addCategory(array $data)
    {
        return Category::query()
            ->create($data);
    }

    public function updateCategory($category_id, array $data)
    {
        return Category::query()
            ->where("id", $category_id)
            ->update($data);
    }

    public function deleteCategory($id)
    {
        return Category::query()
            ->where("id", $id)
            ->delete();
    }
}
