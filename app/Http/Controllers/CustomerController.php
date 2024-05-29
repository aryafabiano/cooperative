<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    
    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|unique:customer|max:4',
            "name" => 'required|max:30',
            "phone" => 'numeric',
            "address" => 'required'
        ]);

        $customer = new Customer;
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        $customer->save();

    }
}
