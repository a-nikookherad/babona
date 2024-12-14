<?php

namespace Production\Http\Controllers\Admin;

use Production\Http\Requests\Products\ProductCreateRequest;
use Production\Http\Requests\Products\ProductUpdateRequest;
use Production\Production;
use Response\Response;

class ProductsController
{
    public function index()
    {
        $filter = function ($query) {
            return $query->where("status", request("status", "published"));
        };
        $products = Production::products($filter, request("per_page", 10));
        return Response::view("Production::admin.product.list", compact("products"))
            ->jsonData($products)
            ->code(200)
            ->success(__("list_of_products"));
    }

    public function store(ProductCreateRequest $request)
    {
        $product = Production::createProduct($request->all());
        if (!$product->exists) {
            return Response::
            code(400)
                ->redirect(route("Production::admin.product.list"))
                ->failed(__("product_didnt_create_successfully"));
        }
        return Response::view("Production::admin.product.list", compact("product"))
            ->jsonData($product)
            ->code(201)
            ->success(__("product_created_successfully"));
    }

    public function edit($id)
    {
        $product = Production::product($id);
        return Response::view("Production::admin.product.view", compact("product"))
            ->jsonData($product)
            ->success(__("get_product_successfully"));
    }

    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Production::editProduct($id, $request->all());

        if ($product) {
            return Response::view("Production::admin.product.list")
                ->jsonData($product)
                ->code(202)
                ->success(__("product_updated_successfully"));
        }
        return Response::jsonData($product)
            ->code(400)
            ->failed(__("something_went_wrong"));
    }

    public function destroy($id)
    {
        Production::destroyProduct($id);
        return Response::view("Production::admin.product.list")
            ->code(204)
            ->success(__("operation_was_success"));
    }
}
