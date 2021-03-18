<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::prefix('customers')->group(function () {
    Route::resource('/', CustomerController::class);
    Route::get('/{customerId}/delete', [CustomerController::class, 'destroy']);
    Route::get('/{customerName}/search', [CustomerController::class, 'search']);
});