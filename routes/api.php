<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/services', [ServiceController::class, 'index']);

    Route::middleware('admin')->group(function () {
        Route::post('/services', [ServiceController::class, 'store']);
        Route::put('/services/{id}', [ServiceController::class, 'update']);
        Route::delete('/services/{id}', [ServiceController::class, 'delete']);
        Route::post('/booking-update/{id}', [BookingController::class, 'update']);
        Route::delete('/booking/{id}', [BookingController::class, 'delete']);
    });

    Route::get('/bookings', [BookingController::class, 'get']);
    Route::post('/bookings', [BookingController::class, 'store']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
