<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::resource('/customers', CustomerController::class);

Route::get('/customers/{customerId}/delete', [CustomerController::class, 'destroy']);