<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\BackProductController;


Route::get('/', [HomeController::class, 'index'])->name("homepage");

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/title', [CatalogController::class, 'indexByTitle'])->name('catalog.title');
Route::get('/catalog/price', [CatalogController::class, 'indexByPrice'])->name('catalog.price');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('catalog.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::put('/cart/{productId}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::delete('/cart/{productId}', [CartController::class, 'removeItem'])->name('cart.removeItem');




Route::prefix('backoffice')->group(function () {
    Route::get('/', [BackofficeController::class, 'index'])->name('backoffice');
    Route::get('product', [BackofficeController::class, 'listProducts'])->name('backoffice.product');
    Route::get('product/{id}', [BackProductController::class, 'show'])->name('products.show');


    // Affiche le formulaire pour créer un nouveau produit
    Route::get('product/new', [BackProductController::class, 'create'])->name('products.create');
    // Enregistre un nouveau produit en base de données (via le formulaire)
    Route::post('products', [BackProductController::class, 'store'])->name('products.store');
    // Supprime un produit existant
    Route::delete('products/{id}', [BackProductController::class, 'destroy'])->name('products.destroy');


    // Affiche le formulaire de modification d’un produit
    Route::get('product/{id}/edit', [BackProductController::class, 'edit'])->name('products.edit');
    // Met à jour un produit existant (via le formulaire d’édition)
    Route::put('product/{id}', [BackProductController::class, 'update'])->name('products.update');
});
