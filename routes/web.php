<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/', [HomeController::class, 'index'])->name("homepage");
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/Catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('catalog.show');
