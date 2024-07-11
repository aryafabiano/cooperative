@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h1 class="text-center mb-0">INFO NASABAH</h1>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <td>: {{ $customer->name }}</td>
                    </tr>
                    <tr> 
                        <th>Kode Pelanggan</th>
                        <td>: {{ $customer->code }}</td>
                    </tr>
                    <tr>
                        <th>Telepon Pelanggan</th>
                        <td>: {{ $customer->phone }}</td>
                    </tr>
                    <tr>
                        <th>Alamat Pelanggan</th>
                        <td>: {{ $customer->address }}</td>
                    </tr>
                    <tr>
                        <th>Total Simpanan</th>
                        <td>: Rp {{ number_format($customer->mandatorySavings->sum('amount'), 0, ',', '.') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="text-center mb-0">Riwayat Pembayaran Simpanan Wajib</h1>
            </div>
            <div class="card-body p-4">
                <table class="table table-hover table-bordered table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer->mandatorySavings as $ms)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ \Carbon\Carbon::parse($ms->date)->format('d M Y') }}</td>
                                <td>{{ 'Rp ' . number_format($ms->amount, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <style>
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #000505; /* Atur ketebalan border dan warna sesuai keinginan */
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f5f5f5; /* Warna latar belakang untuk baris ganjil */
        }
    </style>
@endsection
