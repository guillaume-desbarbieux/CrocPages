<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\CheckAbilities;
use Laravel\Sanctum\Http\Middleware\CheckForAnyAbility;

Route::get('/index', [ProductController::class, 'index']);
Route::get('/show/{id}', [ProductController::class, 'show']);

Route::middleware(['auth:sanctum', 'abilities:admin'])->group(function () {
    Route::post('/create', [ProductController::class, 'create']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
    Route::delete('/delete/{id}', [ProductController::class, 'delete']);
});

Route::post('/tokens/create', [UserController::class, 'createToken']);
Route::post('/tokens/index', [UserController::class, 'listToken']);
