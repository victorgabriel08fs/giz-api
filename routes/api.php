<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\BondController;
use App\Http\Controllers\Api\CareerController;
use App\Http\Controllers\Api\DisciplineController;
use App\Http\Controllers\Api\RegistrationController;
use App\Http\Controllers\Api\SemesterController;
use App\Http\Controllers\Api\UserController;
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
    Route::apiResource('/careers', CareerController::class);
    Route::apiResource('/disciplines', DisciplineController::class);
    Route::get('/disciplines/lessons/{discipline}', [DisciplineController::class, 'lessons']);
    Route::post('/disciplines/checkPresence', [DisciplineController::class, 'checkPresence']);
    Route::apiResource('/registrations', RegistrationController::class);
    Route::apiResource('/semesters', SemesterController::class);
    Route::apiResource('/bonds', BondController::class);
});
