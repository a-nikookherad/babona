<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        return view("shop/index");
    }

    public function contact()
    {
        return view("shop/contact");
    }

    public function categories()
    {
        $category = "";
        return view("shop/category", compact("category"));
    }

    public function single()
    {
        $product = "";
        return view("shop/single", compact("product"));
    }
}
