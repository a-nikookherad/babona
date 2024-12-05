<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\Production\src\Entities\Models\Category;
use App\Services\Production\src\Entities\Models\Product;

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
