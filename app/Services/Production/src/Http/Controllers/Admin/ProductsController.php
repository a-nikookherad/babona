<?php

namespace Production\Http\Controllers\Admin;

use Production\Http\Requests\Products\ProductCreateRequest;
use Production\Http\Requests\Products\ProductUpdateRequest;
use Production\Production;
use Response\Attachment;

class ProductsController
{
    public function index()
    {
//        dd(request()->all());
        $filter = function ($query) {
            return $query->where("status", request("status", "published"));
        };
        $products = Production::products($filter, request("per_page", 10));
        return Attachment::view("admin.product.list", compact("products"))
            ->jsonData($products)
            ->code(200)
            ->success(__("list_of_products"));
    }

    public function store(ProductCreateRequest $request)
    {
        $product = Production::createProduct($request);
        if (!$product->exists) {
            return Attachment::code(400)
                ->redirect(route("production.products.list"))
                ->failed(__("product_didnt_create_successfully"));
        }
        return Attachment::redirect(route("production.products.list"))
            ->jsonData($product)
            ->code(201)
            ->success(__("product_created_successfully"));
    }

    public function edit($id)
    {
        $product = Production::product($id);
        if (!$product->exits) {
            return Attachment::redirect(route("production.products.list"))
                ->code(400)
                ->failed(__("something_went_wrong"));
        }
        return Attachment::view("admin.product.edit", compact("product"))
            ->jsonData($product)
            ->code(200)
            ->success(__("get_product_successfully"));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Production::editProduct($id, $request->all());

        if ($product) {
            return Attachment::redirect("production.products.list")
                ->jsonData($product)
                ->code(202)
                ->success(__("product_updated_successfully"));
        }
        return Attachment::jsonData($product)
            ->code(400)
            ->redirect(route("production.products.list"))
            ->failed(__("something_went_wrong"));
    }

    public function destroy($id)
    {
        Production::destroyProduct($id);
        return Attachment::view("Production::admin.product.list")
            ->code(204)
            ->success(__("operation_was_success"));
    }
}
