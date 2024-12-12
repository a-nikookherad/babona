<?php

use App\Http\Controllers\V1\AuthController;
use App\Http\Controllers\V1\CategoriesController;
use App\Http\Controllers\V1\HomeController;
use App\Http\Controllers\V1\ProductsController;
use Illuminate\Support\Facades\Route;


Route::group([
    "prefix" => ""
], function () {
    Route::get('', [HomeController::class, "index"])
        ->name("home");

    Route::get('contact', [HomeController::class, "contact"])
        ->name("contact");
});

Route::group([
    "prefix" => "auth"
], function () {
    Route::get('login', [AuthController::class, "login"])
        ->name("login");

    Route::post('login', [AuthController::class, "authenticate"])
        ->name("login.post");

    Route::get('register', [AuthController::class, "register"])
        ->name("register");

    Route::post('register', [AuthController::class, "storeMember"])
        ->name("register.post");
});
