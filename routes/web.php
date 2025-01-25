<?php

use App\Http\Controllers\v1\CategoriesController;
use App\Http\Controllers\v1\HomeController;
use App\Http\Controllers\v1\ProductsController;
use Illuminate\Support\Facades\Route;



Route::group([
    "prefix" => ""
], function () {
    Route::get('', [HomeController::class, "index"])
        ->name("home");

    Route::get('contact', [HomeController::class, "contact"])
        ->name("contact");
});
