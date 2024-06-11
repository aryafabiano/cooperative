@extends('layouts.main')

@section('content')
    
    <div class='mb-2'>
        <h1>Data Nasabah</h1>
        <table class="table">
            <tr>
                <th>Kode Nasabah</th>
                <td>: {{ $customer->code }}</td>
            </tr>
            <tr>
                <th>Nama Nasabah</th>
                <td>: {{ $customer->Name }}</td>
            </tr>
            <tr>
                <th>Alamat Nasabah</th>
                <td>: {{ $customer->address }}</td>
            </tr>
            <tr>
                <th>Telepon Nasabah</th>
                <td>: {{ $customer->phone }}</td>
            </tr>
        </table>
    </div>

@endsection

