<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{product}/show', [ProductController::class, 'show'])->name('products.show');
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);