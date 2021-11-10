<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*User API routes */

Route::group(['middleware' => ['cors', 'json.response']], function () {

    Route::prefix('v1')->group(function () {

        Route::prefix('auth')->group(function () {

            Route::post('/login', [\App\Http\Controllers\Auth\User\AuthController::class, 'login'])->name('login.api');

            Route::post('/register',[\App\Http\Controllers\Auth\User\AuthController::class, 'register'])->name('register.api');

        });

    });

});

/* Protected API Routes */
Route::middleware('auth:api')->group(function () {

    Route::prefix('v1')->group(function () {

        Route::prefix('auth')->group(function () {

            Route::post('/logout', [\App\Http\Controllers\Auth\User\AuthController::class, 'logout'])->name('logout.api');

        });
    });

});
