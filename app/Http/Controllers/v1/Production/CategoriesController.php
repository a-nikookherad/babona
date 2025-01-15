<?php

namespace App\Http\Controllers\v1\Production;

use App\Http\Requests\production\Categories\CategoryCreateRequest;
use App\Http\Requests\production\Categories\CategoryUpdateRequest;
use Production\Entities\Models\Category;
use Production\Production;
use Response\Response;

class CategoriesController
{
    public function index()
    {
        $categories = Production::categoriesPaginate(request("per_page", 5));
        return Response::view("admin.production.category.list", compact("categories"))
            ->jsonData($categories)
            ->code(200)
            ->success(__("messages.list_of_categories"));
    }

    public function create()
    {
        $categories = Production::categoriesByPluck(["id", "fa_name"])->toArray();
        return view("admin.production.category.create", ["categories" => $categories]);
    }

    public function store(CategoryCreateRequest $request)
    {
        $category = Production::createCategory($request);
        return Response::redirect(route("production.categories.create"))
            ->jsonData($category)
            ->code(201)
            ->success(__("messages.category_created_successfully"));
    }

    public function edit($id)
    {
        $category = Production::category($id, ["thumbnail"]);
        $categories = Production::categoriesByPluck(["id", "fa_name"])->toArray();
        return Response::view("admin.production.category.edit", compact("category", "categories"))
            ->jsonData($category)
            ->code(200)
            ->success(__("messages.operation_was_successfully"));
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Production::editCategory($id, $request);

        if ($category) {
            return Response::redirect(route("production.categories.list"))
                ->jsonData($category)
                ->code(202)
                ->success(__("messages.category_updated_successfully"));
        }
        return Response::jsonData($category)
            ->code(400)
            ->redirect(route("production.categories.list"))
            ->failed(__("messages.something_went_wrong"));
    }

    public function destroy(Category $category)
    {
        $rowEffect = Production::destroyCategory($category);
        if ($rowEffect == 0) {
            return Response::code(400)
                ->redirect(route("production.categories.list"))
                ->failed(__("messages.something_went_wrong"));
        }
        return Response::redirect(route("production.categories.list"))
            ->code(204)
            ->success(__("messages.operation_was_success"));
    }
}
