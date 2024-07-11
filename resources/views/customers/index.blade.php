@extends('layouts.main')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success mb-1">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Daftar Nasabah</h4>
            <a href="{{ route('customer.create') }}" class="btn btn-success">Pendaftaran</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $customer->code }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td class="text-end">
                                    <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">Lihat Data</a>
                                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    <form action="{{ route('customer.destroy', $customer->id)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection