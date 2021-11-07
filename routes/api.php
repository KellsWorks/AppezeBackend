<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Public API routes */

Route::group(['middleware' => ['cors', 'json.response']], function () {

    Route::prefix('v1')->group(function () {

        Route::prefix('auth')->group(function () {

            Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login.api');

            Route::post('/register',[\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register.api');

        });

    });

});

/* Protected API Routes */
Route::middleware('auth:api')->group(function () {

    Route::prefix('v1')->group(function () {

        Route::prefix('auth')->group(function () {

            Route::post('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout.api');

        });
    });

});
