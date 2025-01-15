<?php


use App\Http\Controllers\v1\Production\CategoriesController;
use App\Http\Controllers\v1\Production\ProductsController;
use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\App::setLocale("fa");
Route::group([
    "prefix" => "admin",
    "middleware" => ["web"]
], function () {

    Route::group([
        "prefix" => "categories",
//        "middleware" => ["can:super_admin"]
    ], function () {
        Route::get("", [CategoriesController::class, "index"])
            ->name("production.categories.list");

        Route::get("create", [CategoriesController::class, "create"])
            ->name("production.categories.create");

        Route::post("", [CategoriesController::class, "store"])
            ->name("production.categories.store");

        Route::get("{id}/edit", [CategoriesController::class, "edit"])
            ->name("production.categories.edit");

        Route::put("{id}/update", [CategoriesController::class, "update"])
            ->name("production.categories.update");

        Route::delete("{category}/delete", [CategoriesController::class, "destroy"])
            ->name("production.categories.delete");
    });

    Route::group([
        "prefix" => "products"
    ], function () {

        Route::get("", [ProductsController::class, "index"])
            ->name("production.products.list");

        Route::view("create", "admin.production.product.create")
            ->name("production.products.create");

        Route::post("", [ProductsController::class, "store"])
            ->name("production.products.store");

        Route::get("{id}/edit", [ProductsController::class, "edit"])
            ->name("production.products.edit");

        Route::put("{id}/update", [ProductsController::class, "update"])
            ->name("production.products.update");

        Route::delete("{id}/delete", [ProductsController::class, "destroy"])
            ->name("production.products.delete");
    });
});
