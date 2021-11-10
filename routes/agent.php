<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Agent API routes */

Route::prefix('v1')->group(function () {

    Route::prefix('auth')->group(function () {

    });

    Route::prefix('skills')->group(function () {

        Route::post('new', [App\Http\Controllers\Agent\AgentController, 'newSkill']);

        Route::post('get', [App\Http\Controllers\Agent\AgentController, 'getSkill']);

        Route::post('delete', [App\Http\Controllers\Agent\AgentController, 'deleteSkill']);

    });

});
