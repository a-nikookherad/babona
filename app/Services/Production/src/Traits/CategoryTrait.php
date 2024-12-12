<?php

namespace Production\Traits;

use Production\Entities\Repositories\category\CategoryRepo;

trait CategoryTrait
{
    public function categories()
    {
        return CategoryRepo::all();
    }

    public function category($id)
    {
        return CategoryRepo::getById($id);
    }

    public function addCategory(array $data)
    {
        return CategoryRepo::store($data);
    }

    public function editCategory($category_id, array $data)
    {
        return CategoryRepo::update($category_id, $data);
    }

    public function destroyCategory($id)
    {
        return CategoryRepo::delete($id);
    }
}
