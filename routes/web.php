<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/my-name/{param}',function($name) {
    echo " Nama saya adalah " . $name;
});

Route::get('/my-city/{city?}',function($city = " Bandung") {
    echo " Kota saya adalah " . $city;
});
