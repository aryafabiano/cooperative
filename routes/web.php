<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomerController;
use App\http\Controllers\PersonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    echo "Alamat saya di bandung";
});

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');    
Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');    



Route::get('/nasabah/get-name/{param}', [CustomerController::class, 'getName']);    

Route::get('/nasabah/my-city/{city?}', [CustomerController::class, 'city']);  

Route::get('/getStudent/{name?}/{nrp?}', [CustomerController::class, 'getStudent']);  

Route::get('/Person/create}', [PersonController::class, 'create'])->name('person.create');

Route::post('/Person/store}', [PersonController::class, 'store'])->name('person.store');  


