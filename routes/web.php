<?php

use App\Http\Controllers\V1\AuthController;
use App\Http\Controllers\V1\CategoriesController;
use App\Http\Controllers\V1\HomeController;
use App\Http\Controllers\V1\ProductsController;
use Illuminate\Support\Facades\Route;


Route::group([
    "prefix" => "/"
], function () {
    Route::get('/', [HomeController::class, "index"])
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

Route::group([
    "prefix" => "categories",
], function () {

    Route::group([
        "middleware" => ["auth:web"]
    ], function () {
        Route::get('{id}/view', [CategoriesController::class, "view"])
            ->name("category.view");

        Route::put('{id}', [CategoriesController::class, "update"])
            ->name("category.update");

        Route::get('create', [CategoriesController::class, "create"])
            ->name("category.create");

        Route::post('', [CategoriesController::class, "store"])
            ->name("category.store");
    });

    Route::get('/', [CategoriesController::class, "index"])
        ->name("category.index");

    Route::get('{id}/details', [CategoriesController::class, "details"])
        ->name("category.details");
});

Route::group([
    "prefix" => "products",
], function () {

    Route::group([
        "middleware" => ["auth:web"]
    ], function () {

        Route::get('{id}/view', [ProductsController::class, "view"])
            ->name("product.view");

        Route::put('{id}', [ProductsController::class, "update"])
            ->name("product.update");

        Route::get('create', [ProductsController::class, "create"])
            ->name("product.create");

        Route::post('', [ProductsController::class, "store"])
            ->name("product.store");
    });


    Route::get('', [ProductsController::class, "index"])
        ->name("product.index");

    Route::get('{id}/details', [ProductsController::class, "details"])
        ->name("product.details");

});
