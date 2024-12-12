<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        dd(563463);
    }

    public function contact()
    {
        return view("shop/contact");
    }
}
