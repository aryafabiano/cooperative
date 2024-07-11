@extends('layouts.main')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success mb-1">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between">
            <h5 class="card-title mb-0">Daftar Pembayaran Simpanan Wajib</h5>
            <a href="{{ route('mandatory-saving.create') }}" class="btn btn-success">Pembayaran</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal Bayar</th>
                        <th scope="col">Kode Nasabah</th>
                        <th scope="col">Nama Nasabah</th>
                        <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mandatorySavings as $ms)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ \Carbon\Carbon::parse($ms->date)->format('d M Y') }}</td>
                        <td>{{ $ms->customer->code }}</td>
                        <td>{{ $ms->customer->name }}</td>
                        <td>{{ 'Rp ' . number_format($ms->amount, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection