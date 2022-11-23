<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';


// ADMIN ROUTES ===========================================================

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('cities', \App\Http\Controllers\CityController::class)->except('index', 'show');
    Route::resource('categories', \App\Http\Controllers\CategoryController::class)->except('index', 'show');
});


// LOGGED IN ROUTES ======================================================

Route::middleware('auth')->group(function () {
    Route::resource('reviews', \App\Http\Controllers\ReviewController::class)->except('index', 'show');
});


// PUBLIC ROUTES =========================================================

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);

Route::resource('cities', \App\Http\Controllers\CityController::class)->only('index', 'show');

Route::resource('categories', \App\Http\Controllers\CategoryController::class)->only('index', 'show');

Route::resource('reviews', \App\Http\Controllers\ReviewController::class)->only('index', 'show');
