<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BackofficeController;


Route::get('/', [HomeController::class, 'index'])->name("homepage");

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/title', [CatalogController::class, 'indexByTitle'])->name('catalog.title');
Route::get('/catalog/price', [CatalogController::class, 'indexByPrice'])->name('catalog.price');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('catalog.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::put('/cart/{productId}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::delete('/cart/{productId}', [CartController::class, 'removeItem'])->name('cart.removeItem');


Route::get('/backoffice', [BackofficeController::class, 'home'])->name('backoffice');
Route::get('/backoffice/product', [BackofficeController::class, 'index'])->name('backoffice.index');
Route::get('/backoffice/product/{id}', [BackofficeController::class, 'show'])->name('backoffice.show');
Route::get('/backoffice/product/{id}/edit', [BackofficeController::class, 'edit'])->name('backoffice.edit');
Route::get('/backoffice/product/new', [BackofficeController::class, 'testnew'])->name('backoffice.testnew');
