<?php

use App\Http\Controllers\v1\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::group([
    "prefix" => "admin"
], function () {
    Route::get('login', [AuthController::class, "login"])
        ->name("login");

    Route::post('login', [AuthController::class, "authenticate"])
        ->name("admin.login.post");

    Route::group([
        "middleware" => ["auth:web"]
    ], function () {

        Route::view("dashboard", "admin.dashboard")
            ->middleware("can:admin_group")
            ->name("admin.dashboard");

        Route::get('logout', [AuthController::class, "logout"])
            ->name("admin.logout");

        Route::get('register', [AuthController::class, "register"])
            ->middleware("can:admin")
            ->name("admin.register");

        Route::post('register', [AuthController::class, "storeMember"])
            ->middleware("can:admin")
            ->name("admin.register.post");
    });
});
