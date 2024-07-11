@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <p>ERROR!!!</p>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </div>
    @endif

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-radius: 15px 15px 0 0;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
    </style>
    
    <div class="card mt-4">
        <div class="card-header text-center">
            <h5>Form Pendaftaran</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="code" placeholder="Kode Pelanggan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Nama Pelanggan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="phone" placeholder="08xxxxxx" class="form-control" required>
                </div>
                <div class="mb-3">
                    <textarea name="address" cols="30" rows="3" placeholder="Alamat Pelanggan" class="form-control" required></textarea>
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" value="Simpan" class="btn btn-success btn-block">
                </div>
            </form>
        </div>
    </div>
    
@endsection
