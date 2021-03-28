<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function(){
    Route::post('/migrate', [\App\Http\Controllers\CommandController::class, 'migrate']);
    Route::post('/routes-cache', [\App\Http\Controllers\CommandController::class, 'routesCache']);
    Route::post('/config-cache', [\App\Http\Controllers\CommandController::class, 'configCache']);
    Route::post('/clear-cache', [\App\Http\Controllers\CommandController::class, 'clearCache']);
    Route::post('/clear-view', [\App\Http\Controllers\CommandController::class, 'clearView']);
});

