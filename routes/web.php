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

Route::prefix('backoffice')->group(function () {
    Route::get('/', [BackofficeController::class, 'home'])->name('backoffice');

    Route::prefix('product')->group(function () {
        Route::get('/', [BackofficeController::class, 'index'])->name('backoffice.products.index');
        Route::get('/{id}', [BackofficeController::class, 'show'])->name('backoffice.products.show');
        Route::get('/{id}/edit', [BackofficeController::class, 'edit'])->name('backoffice.products.edit');
        Route::get('/new', [BackofficeController::class, 'testnew'])->name('backoffice.products.testnew');
    });
});
