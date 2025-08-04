<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ProductController as ControllersProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/index', [ProductController::class, 'index']);
Route::post('/show', [ProductController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/save', [ProductController::class, 'save']);
    Route::post('/update', [ProductController::class, 'update']);
});

Route::post('/login', [UserController::class, 'login']);
Route::get('/show', [UserController::class, 'show']);
