<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\MandatorySaving; 
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(){
        return view('customers.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|unique:customers|max:4',
            'name' => 'required|max:30',
            'address' => 'required',
            'phone' => 'numeric'
        ]);
        $customer = new Customer();
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) { 
            return redirect()->route('customer.show', $customer->id);
        } else {
            dd('Data Gagal Disimpan!!!');
        }

    }
    public function show($id) {
        // SELECT * FROM customers where id = x
        $customer = Customer::find($id);

        
        return view('customers.show', compact('customer'));
    }

    public function index() {
        // SELECT * FROM customers

        //$customers = Customer::all();
        $customers = Customer::orderBy('id', 'DESC')->get();
        
        return view('customers.index', compact('customers'));
    }

    // method untuk mengambil data yang diubah
    public function edit($id) {
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'));
    }
    // method untuk menyimpan data yang diubah
    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:30',
            'address' => 'required',
            'phone' => 'numeric'
        ]);
        $customer = Customer::find($request->id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) { 
            return redirect()->route('customer.index')->with('sucsess', "Data Nasabah $customer->code Berhasil di Perbarui");
        } else {
            dd('Data Gagal Disimpan!!!');
        }

    }
    // method untuk hapus data
    public function destroy($id) {
        $customer = Customer::find($id);

        if ($customer) {
            // Delete related mandatory savings
            MandatorySaving::where('customer_id', $id)->delete();

            // Delete the customer
            if ($customer->delete()) {
                return redirect()->route('customer.index')->with('success', 'Data Berhasil Dihapus');
            } else {
                return redirect()->route('customer.index')->with('error', 'Data Gagal Dihapus');
            }
        } else {
            return redirect()->route('customer.index')->with('error', 'Data Tidak Ditemukan');
        }
    }
}
