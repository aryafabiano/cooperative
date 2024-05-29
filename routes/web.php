<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomerController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/store', [CustomerController::class, 'store'])->name('customer.store');