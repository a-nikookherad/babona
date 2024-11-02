<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view("shop/index");
    }
}
