<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

Route::get('/drivers/{id}/profile', [DriverController::class, 'profile']);

Route::get('/drivers', [DriverController::class, 'driver_list']);