<?php

use Illuminate\Support\Facades\Route;


Route::group([
    "prefix"=>"/"
], function () {
    Route::get('/', [\App\Http\Controllers\V1\HomeController::class,"index"])
        ->name("home");

    Route::get('contact', [\App\Http\Controllers\V1\HomeController::class,"contact"])
        ->name("contact");

    Route::get('category/{id}', [\App\Http\Controllers\V1\HomeController::class,"category"])
        ->name("category");

    Route::get('single/{id}', [\App\Http\Controllers\V1\HomeController::class,"single"])
        ->name("single");

});


