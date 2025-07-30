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


Route::get('/backoffice/product/index/{isDeleted?}', action: [BackofficeController::class, 'index'])->name('backoffice.product.index');
Route::get('/backoffice/product/create', action: [BackofficeController::class, 'create'])->name('backoffice.product.create');
Route::put('/backoffice/product/save', action: [BackofficeController::class, 'save'])->name('backoffice.product.save');
Route::get('/backoffice/product/{id}/edit', [BackofficeController::class, 'showEdit'])->name('backoffice.product.edit');
Route::get('/backoffice/product/{id}/{action?}', [BackofficeController::class, 'show'])->name('backoffice.product.show');


Route::put('/backoffice/product/{id}', [BackofficeController::class, 'update'])->name('backoffice.product.update');
Route::delete('/backoffice/product/{id}', [BackofficeController::class, 'delete'])->name('backoffice.product.delete');