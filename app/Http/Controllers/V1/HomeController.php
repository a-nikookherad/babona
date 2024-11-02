<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::query()
            ->with("products")
            ->get();
        $products = Product::query()
            ->with("category")
            ->get();
        return view("shop/index", compact(["categories", "products"]));
    }

    public function contact()
    {
        return view("shop/contact");
    }
}
