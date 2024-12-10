<?php


use Illuminate\Support\Facades\Route;

Route::group([
    "prefix" => "dashboard",
    "middleware" => "auth:web"
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

        Route::post("{id}/update", [\Production\Http\Controllers\Admin\CategoriesController::class, "update"])
            ->name("production.categories.update");

        Route::delete("{id}/delete", [\Production\Http\Controllers\Admin\CategoriesController::class, "destroy"])
            ->name("production.categories.delete");
    });

    Route::group([
        "prefix" => "products"
    ], function () {

    });
});

Route::group([
    "prefix" => "categories"
], function () {
    Route::get("", [\Production\Http\Controllers\CategoriesController::class, "index"])
        ->name("production.categories.list");
});

Route::group([
    "prefix" => "products"
], function () {

});
