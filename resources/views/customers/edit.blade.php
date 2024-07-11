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

    <div class="card">
        <div class="card-header">
            Ubah Data Nasabah Kode #{{ $customer->code }}
        </div>
        <div class="card-body">
            <form action="{{ route('customer.update') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $customer->id }}">
                <div class="mb-3">
                    <label for="">Nama Nasabah</label>
                    <input type="text" name="name" placeholder="Nama Nasabah" class="form-control"
                        value="{{ $customer->name }}">
                </div>
                <div class="mb-3">
                    <label for="">Telepon Nasabah</label>
                    <input type="text" name="phone" placeholder="08xxxxxx" class="form-control"
                        value="{{ $customer->phone }}">
                </div>
                <div class="mb-3">
                    <label for="">Alamat Nasabah</label>
                    <textarea name="address" cols="30" rows="3" placeholder="Alamat Pelanggan" class="form-control"
                        class="form-control">{{ $customer->address }} </textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
