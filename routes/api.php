<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\UserController;
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

Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/me', [LoginController::class, 'me']);

    Route::apiResource('/users', UserController::class);
});
