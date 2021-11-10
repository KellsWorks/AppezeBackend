<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Agent API routes */

Route::prefix('v1')->group(function () {

    Route::prefix('auth')->group(function () {

    });

    Route::prefix('profile')->group(function () {

        Route::post('edit', [App\Http\Controllers\Agent\ProfileController::class, 'edit']);

    });

    Route::prefix('skills')->group(function () {

        Route::post('new', [App\Http\Controllers\Agent\AgentController::class, 'newSkill']);

        Route::post('get', [App\Http\Controllers\Agent\AgentController::class, 'getSkill']);

        Route::post('delete', [App\Http\Controllers\Agent\AgentController::class, 'deleteSkill']);

    });


});
