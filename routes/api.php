<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Auth endpoints (login, logout, refresh, profile)
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::get('me', [AuthController::class, 'me']);

Route::middleware('auth:api')->group(function () {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('contacts', ContactController::class);
    Route::apiResource('sales', SaleController::class);
    Route::get('reports', [SaleController::class, 'report']);

    // get user
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});


