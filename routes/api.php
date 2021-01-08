<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')
    ->name('api.')
    ->group(function() {
        Route::post('/upload', [\App\Http\Controllers\Api\UploadController::class, 'create']);
        Route::Get('/person', [\App\Http\Controllers\Api\PersonController::class, 'index']);
        Route::Get('/person/{id}', [\App\Http\Controllers\Api\PersonController::class, 'show']);
        Route::Get('/shiporder', [\App\Http\Controllers\Api\ShipOrderController::class, 'index']);
        Route::Get('/shiporder/{id}', [\App\Http\Controllers\Api\ShipOrderController::class, 'show']);
});


