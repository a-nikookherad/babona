<?php

namespace Production\Http\Controllers\Admin;

use Production\Http\Requests\Categories\CategoryCreateRequest;
use Production\Http\Requests\Categories\CategoryUpdateRequest;
use Production\Production;
use Response\Response;

class CategoriesController
{
    public function index()
    {
        $categories = Production::categories();
        return Response::view("admin.category.list", compact("categories"))
            ->jsonData($categories)
            ->code(200)
            ->success(__("list_of_categories"));
    }

    public function create()
    {
        $categories = Production::categoriesByPluck(["id", "fa_name"]);
        return view("admin.category.create", ["categories" => $categories->toArray()]);
    }

    public function edit($id)
    {
        $category = Production::category($id);
        return Response::view("admin.category.edit", compact("category"))
            ->jsonData($category)
            ->success("error");
    }

    public function update(CategoryUpdateRequest $request, $id)
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
        $category = Production::editCategory($id, $data);

        if ($category) {
            return Response::view("Production::admin.category.list")
                ->jsonData($category)
                ->code(202)
                ->success(__("category_updated_successfully"));
        }
        return Response::jsonData($category)
            ->code(400)
            ->failed(__("something_went_wrong"));
    }

    public function store(CategoryCreateRequest $request)
    {
        $category = Production::createCategory($request);
        return Response::redirect(route("production.categories.create"))
            ->jsonData($category)
            ->code(201)
            ->success(__("category_created_successfully"));
    }

    public function destroy($id)
    {
        Production::destroyCategory($id);
        return Response::view("Production::admin.category.list")
            ->code(204)
            ->success(__("operation_was_success"));
    }
}
