<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create() {
        return view('customer.create');

    }
    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|unique:customer|max:4',
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required',
        ]);

        $customer =new Customer();
        $Cusotmer->code = $request->code;
        $Cusotmer->name = $request->name;
        $Cusotmer->phone = $request->phone;
        $Cusotmer->address = $request->address;

        if($customer->save()) {
            dd("Data Berhasil di Simpan");
        } else {
            dd("Data Gagal di Simpan");
        }
    }
}