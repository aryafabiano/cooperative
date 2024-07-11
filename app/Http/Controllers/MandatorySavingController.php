<?php

namespace App\Http\Controllers;

use App\Models\MandatorySaving;
use App\Http\Requests\StoreMandatorySavingRequest;
use App\Http\Requests\UpdateMandatorySavingRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class MandatorySavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mandatorySavings = MandatorySaving::orderBy('id','DESC')->get();
        return view('mandatory_saving.index', compact('mandatorySavings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('mandatory_saving.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMandatorySavingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'customer_id' => 'required',
                'amount' => 'required',
            ]);
            $mandatorySaving = new MandatorySaving();
            $mandatorySaving->date = date('Y-m-d');
            $mandatorySaving->customer_id = $request->customer_id;
            $mandatorySaving->amount = $request->amount;
    
            if($mandatorySaving->save()) { 
                return redirect()->route('mandatory-saving.index')->with('Succes','Data Transaksi Berhasil diTambahkan');
            } else {
                dd('Data Gagal Disimpan!!!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function show(MandatorySaving $mandatorySaving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function edit(MandatorySaving $mandatorySaving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMandatorySavingRequest  $request
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMandatorySavingRequest $request, MandatorySaving $mandatorySaving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function destroy(MandatorySaving $mandatorySaving)
    {
        
    }
}
