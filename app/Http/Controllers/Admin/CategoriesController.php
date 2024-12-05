<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CategoryCreateRequest;
use App\Http\Requests\Categories\CategoryUpdateRequest;
use App\Services\Production\src\Entities\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::query()
            ->get();
        return view("shop/categories/list", compact("categories"));
    }

    public function details($id)
    {
        $category = Category::query()
            ->where("id", $id)
            ->first();
        return view("shop/categories/details", compact("category"));
    }

    public function view($id)
    {
        $category = Category::query()
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
