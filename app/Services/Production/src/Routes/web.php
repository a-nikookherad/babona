<?php


use Illuminate\Support\Facades\Route;

Route::group([
    "prefix" => "dashboard",
//    "middleware" => "auth:web"
], function () {

    Route::group([
        "prefix" => "categories"
    ], function () {
        Route::get("", [\Production\Http\Controllers\Admin\CategoriesController::class, "index"])
            ->name("production.categories.list");

        Route::view("create", "Production::admin.category.create")
            ->name("production.categories.create");

        Route::post("", [\Production\Http\Controllers\Admin\CategoriesController::class, "store"])
            ->name("production.categories.store");

        Route::get("{id}/edit", [\Production\Http\Controllers\Admin\CategoriesController::class, "edit"])
            ->name("production.categories.edit");

        Route::put("{id}/update", [\Production\Http\Controllers\Admin\CategoriesController::class, "update"])
            ->name("production.categories.update");

        Route::delete("{id}/delete", [\Production\Http\Controllers\Admin\CategoriesController::class, "destroy"])
            ->name("production.categories.delete");
    });

    Route::group([
        "prefix" => "products"
    ], function () {

        Route::get("", [\Production\Http\Controllers\Admin\ProductsController::class, "index"])
            ->name("production.products.list");

        Route::view("create", "Production::admin.product.create")
            ->name("production.products.create");

        Route::post("", [\Production\Http\Controllers\Admin\ProductsController::class, "store"])
            ->name("production.products.store");

        Route::get("{id}/edit", [\Production\Http\Controllers\Admin\ProductsController::class, "edit"])
            ->name("production.products.edit");

    });
});

//Route::group([
//    "prefix" => "categories"
//], function () {
//    Route::get("", [\Production\Http\Controllers\CategoriesController::class, "index"])
//        ->name("production.categories.list");
//});
//
//Route::group([
//    "prefix" => "products"
//], function () {
//
//});
