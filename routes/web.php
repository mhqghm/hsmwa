<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';


// PUBLIC ROUTES =========================================================

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cities', \App\Http\Controllers\CityController::class)->only('index', 'show');

Route::resource('categories', \App\Http\Controllers\CategoryController::class)->only('index', 'show');

Route::resource('reviews', \App\Http\Controllers\ReviewController::class)->only('index', 'show');

// LOGGED IN ROUTES ======================================================

Route::middleware('auth')->group(function () {
    Route::resource('reviews', \App\Http\Controllers\ReviewController::class)->except('index', 'show');
});

// ADMIN ROUTES ===========================================================

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('cities', \App\Http\Controllers\CityController::class)->except('index', 'show');
    Route::resource('categories', \App\Http\Controllers\CategoryController::class)->except('index', 'show');
});

