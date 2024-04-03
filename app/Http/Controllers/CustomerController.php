<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        echo "Alamat saya di bandung";

    }

    public function getName($name) {
        echo " Nama saya adalah ". $name;
    }

    public function city($city) {
        echo " Kota saya adalah ". $city;
    }

    public function getStudent($name = " Arya Fabiano Siregar Kapal lawt ", $code = "220414010") {
        echo " Nama saya  " . $name;
        echo " NRP saya  " . $code;
    }
}
