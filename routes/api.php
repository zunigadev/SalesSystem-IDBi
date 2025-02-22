<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Routes for authentication
Route::prefix('auth')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::post('register', 'register');
        Route::post('login', 'login');
    });
});

// Route for logout
Route::middleware('auth:sanctum')->post('auth/logout', [AuthController::class, 'logout']);


// Routes for products
Route::prefix('products')->middleware('auth:sanctum')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index');  
        Route::post('/', 'store');
    });
});
