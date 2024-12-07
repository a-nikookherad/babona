<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\Production\src\Http\Requests\Categories\CategoryCreateRequest;
use App\Services\Production\src\Http\Requests\Categories\CategoryUpdateRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = \App\Services\Production\src\Entities\Models\Category::query()
            ->get();
        return view("shop/categories/list", compact("categories"));
    }

    public function details($id)
    {
        $category = \App\Services\Production\src\Entities\Models\Category::query()
            ->where("id", $id)
            ->first();
        return view("shop/categories/details", compact("category"));
    }

    public function view($id)
    {
        $category = \App\Services\Production\src\Entities\Models\Category::query()
            ->where("id", $id)
            ->first();
        return view("shop/categories/view", compact("category"));
    }

    public function update(CategoryUpdateRequest $request)
    {

    }

    public function create()
    {
        return view("shop.categories.create");
    }

    public function store(CategoryCreateRequest $request)
    {

    }
}
