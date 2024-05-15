<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    


Route::get('products', [ProductController::class, 'index']); 
Route::get('products/{id}', [ProductController::class, 'show']); 
Route::post('products', [ProductController::class, 'store']); 
Route::put('productsupdate/{id}', [ProductController::class, 'update']);
Route::delete('productdelete/{id}', [ProductController::class, 'destroy']);


// use App\Http\Middleware\CorsMiddleware;

// Route::group(['middleware' => CorsMiddleware::class], function () {
//     Route::group(['prefix' => 'auth'], function () {
//         Route::post('register', [AuthController::class, 'register']);
//         Route::post('login', [AuthController::class, 'login']);
//         Route::post('logout', [AuthController::class, 'logout']);
//         Route::get('me', [AuthController::class, 'me'])->middleware('auth:api');
//     });

   
// });

