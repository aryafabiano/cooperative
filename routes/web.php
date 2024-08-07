<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MandatorySavingController;
use App\Http\Controllers\PersonController;
use App\Models\MandatorySaving;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/create',[CustomerController::class, 'create'])->name('customer.create');
Route::post('customer/store',[CustomerController::class, 'store'])->name('customer.store');

Route::get('customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('customer', [CustomerController::class, 'index'])->name('customer.index');

Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/update', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::resource('mandatory-saving', MandatorySavingController::class);

