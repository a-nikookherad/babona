<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function view($id)
    {
        $product = Product::query()
            ->where("id", $id)
            ->first();
        return view("shop/products/view", compact("product"));
    }
}
