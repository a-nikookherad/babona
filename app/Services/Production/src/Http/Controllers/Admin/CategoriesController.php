<?php

namespace Production\Http\Controllers\Admin;

use Production\Http\Requests\Categories\CategoryCreateRequest;
use Production\Http\Requests\Categories\CategoryUpdateRequest;
use Production\Production;
use function view;

class CategoriesController
{
    public function index()
    {
        $categories = Production::categories();
        return view("Production::admin.category.list", compact("categories"));
    }

    public function edit($id)
    {
        $category = Production::category($id);
        return view("Production::admin.category.view", compact("category"));
    }

    public function update(CategoryUpdateRequest $request,$id)
    {
        $data = $request->only([
            "slug",
            "name",
            "fa_name",
            "description",
            "status",
            "jsonld",
            "parent_id",
        ]);
        Production::updateCategory($id,$data);
        return view("Production::admin.category.list")
            ->with("success", "create successfully");
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = $request->only([
            "slug",
            "name",
            "fa_name",
            "description",
            "status",
            "jsonld",
            "parent_id",
        ]);
        Production::addCategory($data);
        return view("Production::admin.category.list")
            ->with("success", "create successfully");
    }
}
