<?php

namespace App\Services\Production\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Production\Http\Requests\Products\ProductCreateRequest;
use Production\Http\Requests\Products\ProductUpdateRequest;
use Production\Production;
use function view;

class ProductsController extends Controller
{
    public function index()
    {
        $filter = [];
        $products = Production::products($filter, request("per_page"));
        return view("shop/products/list", compact("products"));
    }

    public function details($id)
    {
        $product = Production::product($id);
        return view("shop/products/details", compact("product"));
    }

    public function view($id)
    {
        $product = Production::product($id);
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
