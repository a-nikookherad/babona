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
        $categories = Production::categoriesPaginate(request("per_page", 5));
        return Response::view("admin.category.list", compact("categories"))
            ->jsonData($categories)
            ->code(200)
            ->success(__("list_of_categories"));
    }

    public function create()
    {
        $categories = Production::categoriesByPluck(["id", "fa_name"])->toArray();
        return view("admin.category.create", ["categories" => $categories]);
    }

    public function edit($id)
    {
        $category = Production::category($id, ["thumbnail"]);
        $categories = Production::categoriesByPluck(["id", "fa_name"])->toArray();
        return Response::view("admin.category.edit", compact("category", "categories"))
            ->jsonData($category)
            ->code(200)
            ->success(__("operation_was_successfully"));
    }

    public function update(CategoryUpdateRequest $request, $id)
    {

        $category = Production::editCategory($id, $request);

        if ($category) {
            return Response::redirect(route("production.categories.list"))
                ->jsonData($category)
                ->code(202)
                ->success(__("category_updated_successfully"));
        }
        return Response::jsonData($category)
            ->code(400)
            ->redirect(route("production.categories.list"))
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
        $rowEffect = Production::destroyCategory($id);
        if ($rowEffect == 0) {
            return Response::code(400)
                ->redirect(route("production.categories.list"))
                ->failed(__("something_went_wrong"));
        }
        return Response::redirect(route("production.categories.list"))
            ->code(204)
            ->success(__("operation_was_success"));
    }
}
