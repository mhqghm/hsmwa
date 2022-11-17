<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('cities', \App\Http\Controllers\CityController::class);

Route::resource('categories', \App\Http\Controllers\CategoryController::class);

Route::resource('reviews', \App\Http\Controllers\ReviewController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index']);

require __DIR__.'/auth.php';
