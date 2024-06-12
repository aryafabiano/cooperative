<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function create() {
        return view('customer.create');

    }
    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|max:4',
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required',
        ]);

        $customer =new Customer();
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) {
            return redirect()->route('customer.show', $customer->id);
        } else {
            dd("Data Gagal di Simpan");
        }
    }

    public function show($id) {
        $customer = Customer::find($id);

        return view('customer.show', compact('customer'));
    }

    public function index() {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function edit ($id){
        $customer = Customer::find($id);

        return view('customer.edit', compact('customer'));
    }


    public function update (Request $request){
        $this->validate($request, [
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required',
        ]);

        $customer =Customer::find($request->id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) {
            return redirect()->route('customer.index')->with('succes', 'Data Berhasil Disimpan');
        } else {
            dd("Data Gagal di Simpan");
        }
    }

    public function destroy ($id)
    {
        $customer = Customer::find($id);
        if($customer->delete()) {
        return redirect()->route('customer.index')->with('success', 'Data Berhasil Dihapus');
    } else {
        dd("data gagal dihapus");
        }
    }
}
