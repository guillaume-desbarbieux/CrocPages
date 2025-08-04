<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/index', function () { return Product::all(); });

Route::get('/index', [ProductController::class, 'index']);
Route::get('/show/{id}', [ProductController::class, 'show']);

Route::post('/create', [ProductController::class, 'create']);
Route::post('/update/{id}', [ProductController::class, 'update']);
Route::delete('/delete/{id}', [ProductController::class, 'delete']);