<?php

namespace Production\Http\Controllers;

use Production\Http\Requests\Categories\CategoryCreateRequest;
use Production\Http\Requests\Categories\CategoryUpdateRequest;
use Production\Production;
use function view;

class CategoriesController
{
    public function index()
    {
        $categories = Production::categories();
        return view("shop/categories/list", compact("categories"));
    }

    public function details($id)
    {
        $category = Production::category($id);
        return view("shop/categories/details", compact("category"));
    }

    public function view($id)
    {
        $category = Production::category($id);
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
