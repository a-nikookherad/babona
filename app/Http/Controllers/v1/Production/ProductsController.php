<?php

namespace App\Http\Controllers\v1\Production;

use App\Http\Requests\production\Products\ProductCreateRequest;
use App\Http\Requests\production\Products\ProductUpdateRequest;
use Illuminate\Http\Request;
use Production\Production;
use Response\Response;

class ProductsController
{
    public function index()
    {
        $filter = \request()->get("filter", []);
        $filter = function ($query) use ($filter) {
            $search = empty($filter["search"]) ? null : "%" . $filter["search"] . "%";
            $status = !isset($filter["status"]) ? "published" : $filter["status"];
            return $query->where("status", $status)
                ->when($search, function ($query) use ($search) {
                    return $query->where("fa_name", "like", $search);
                });
        };
        $products = Production::products($filter, request("per_page", 10));
        return Response::view("admin.production.product.list", compact("products"))
            ->jsonData($products)
            ->code(200)
            ->success(__("messages.list_of_products"));
    }

    public function create()
    {
        $categories = Production::categories();
        $tags = Production::tags();
        return Response::view("admin.production.product.create", compact("categories", "tags"))
            ->jsonData($categories)
            ->success(__("messages.product_list"));
    }

    public function store(Request $request)
    {
        $currentUser = auth()->user();
        $product = Production::createProduct($request, $currentUser);
        if (!$product->exists) {
            return Response::code(400)
                ->redirect(route("production.products.list"))
                ->failed(__("messages.product_didnt_create_successfully"));
        }
        return Response::redirect(route("production.products.list"))
            ->jsonData($product)
            ->code(201)
            ->success(__("messages.product_created_successfully"));
    }

    public function edit($id)
    {
        $product = Production::product($id);
        if (!$product->exits) {
            return Response::redirect(route("production.products.list"))
                ->code(400)
                ->failed(__("messages.something_went_wrong"));
        }
        return Response::view("admin.production.product.edit", compact("product"))
            ->jsonData($product)
            ->code(200)
            ->success(__("messages.get_product_successfully"));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Production::editProduct($id, $request->all());

        if ($product) {
            return Response::redirect("production.products.list")
                ->jsonData($product)
                ->code(202)
                ->success(__("messages.product_updated_successfully"));
        }
        return Response::jsonData($product)
            ->code(400)
            ->redirect(route("production.products.list"))
            ->failed(__("messages.something_went_wrong"));
    }

    public function destroy($id)
    {
        Production::destroyProduct($id);
        return Response::view("Production::admin.product.list")
            ->code(204)
            ->success(__("messages.operation_was_success"));
    }
}
