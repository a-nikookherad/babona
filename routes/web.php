<?php

use Illuminate\Support\Facades\Route;


Route::group([
    "prefix" => "/"
], function () {
    Route::get('/', [\App\Http\Controllers\V1\HomeController::class, "index"])
        ->name("home");

    Route::get('contact', [\App\Http\Controllers\V1\HomeController::class, "contact"])
        ->name("contact");

    Route::get('category/{id}', [\App\Http\Controllers\V1\CategoriesController::class, "view"])
        ->name("category.view");

    Route::get('product/{id}', [\App\Http\Controllers\V1\ProductsController::class, "view"])
        ->name("product.view");
});


