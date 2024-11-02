<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function view($id)
    {
        $category = Category::query()
            ->where("id", $id)
            ->first();
        return view("shop/categories/view", compact("category"));
    }

}
