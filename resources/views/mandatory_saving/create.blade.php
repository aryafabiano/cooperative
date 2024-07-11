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
        .input-group-text {
            background-color: #007bff;
            color: white;
            border: none;
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
            <h5>Pembayaran Simpanan Wajib</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('mandatory-saving.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="customer_id" class="form-label">Pilih Nasabah</label>
                    <select name="customer_id" id="customer_id" class="form-select">
                        @foreach ($customers as $c)
                            <option value="{{ $c->id }}">{{ $c->code . " - " . $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Jumlah</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input 
                            type="number" 
                            name="amount" 
                            id="amount" 
                            placeholder="10000" 
                            class="form-control" 
                            min="0" 
                            required 
                        >
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <input type="submit" value="Simpan" class="btn btn-success btn-block">
                </div>
            </form>
        </div>
    </div>
    
@endsection
