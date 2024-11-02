<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\V1\HomeController::class)
    ->name("home");

Route::group([], function () {
    Route::get('api/', function () {
        return view('welcome');
    });
});

