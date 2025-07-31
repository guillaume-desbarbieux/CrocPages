<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\MapController;
use App\Http\Middleware\EnsureUserIsAdmin;

Route::get('/', [HomeController::class, 'index'])->name("homepage");

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/catalog/title', [CatalogController::class, 'indexByTitle'])->name('catalog.title');
Route::get('/catalog/price', [CatalogController::class, 'indexByPrice'])->name('catalog.price');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('catalog.show');

Route::get('/map', [MapController::class, 'index'])->name('map');

Route::middleware('auth')->group(function () {

    Route::get('/product/wish/add/{product_id}', [WishController::class, 'add'])->name('product.wish.add');
    Route::get('/product/wish/remove/{product_id}', [WishController::class, 'remove'])->name('product.wish.remove');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/add/{product_id}/{quantity}', [CartController::class, 'addItem'])->name('cart.add');
    Route::put('/cart/{productId}', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::delete('/cart/{productId}', [CartController::class, 'removeItem'])->name('cart.removeItem');
});

Route::middleware(EnsureUserIsAdmin::class)->group((function () {
    Route::get('/backoffice/product/index',  [BackofficeController::class, 'index'])->name('backoffice.product.index');
    Route::get('/backoffice/product/create',  [BackofficeController::class, 'create'])->name('backoffice.product.create');
    Route::put('/backoffice/product/save',  [BackofficeController::class, 'save'])->name('backoffice.product.save');
    Route::get('/backoffice/product/{id}/edit', [BackofficeController::class, 'showEdit'])->name('backoffice.product.edit');
    Route::get('/backoffice/product/{id}', [BackofficeController::class, 'show'])->name('backoffice.product.show');
    Route::put('/backoffice/product/{id}', [BackofficeController::class, 'update'])->name('backoffice.product.update');
    Route::delete('/backoffice/product/{id}', [BackofficeController::class, 'delete'])->name('backoffice.product.delete');
    Route::get('/backoffice/tags/create', function () {return view('backoffice.createtag');})->name('tags.create');
    Route::post('/backoffice/tags', [\App\Http\Controllers\TagController::class, 'store'])->name('tags.store');
}));

require __DIR__ . '/auth.php';
