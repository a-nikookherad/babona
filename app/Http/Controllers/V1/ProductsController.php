<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\Production\src\Entities\Models\Product;
use App\Services\Production\src\Http\Requests\Products\ProductCreateRequest;
use App\Services\Production\src\Http\Requests\Products\ProductUpdateRequest;

class ProductsController extends Controller
{
    public function index()
    {
        $products = \App\Services\Production\src\Entities\Models\Product::query()
            ->with("category")
            ->get();
        return view("shop/products/list", compact("products"));
    }

    public function details($id)
    {
        $product = \App\Services\Production\src\Entities\Models\Product::query()
            ->where("id", $id)
            ->with("category")
            ->first();
        return view("shop/products/details", compact("product"));
    }

    public function view($id)
    {
        $product = Product::query()
            ->where("id", $id)
            ->with("category")
            ->first();
        return view("shop/products/view", compact("product"));
    }

    public function update(ProductUpdateRequest $request)
    {

    }

    public function create()
    {
        return view("shop/products/create");
    }

    public function store(ProductCreateRequest $request)
    {

    }
}
