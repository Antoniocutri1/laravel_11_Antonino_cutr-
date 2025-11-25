<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('dashboard');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');

Route::post('/contact-us', [PublicController::class, 'email'])->name('email');

Route::get('/product', [ProductController::class, 'index'])->name('products');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.form')->middleware('auth');
Route::post('/product/create', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
