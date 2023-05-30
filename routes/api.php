<?php

use App\Http\Controllers\OrderService\{
    CreateOrderServiceController,
    GetOrderServiceController,
    GetShowOrderServiceController
};

use Illuminate\Support\Facades\Route;

/**
 * Route Orders Services
 */
Route::get('/getorderservice', GetOrderServiceController::class);
Route::get('/getorderservice/{identify}', GetShowOrderServiceController::class);
Route::post('/createorderservice', CreateOrderServiceController::class);

