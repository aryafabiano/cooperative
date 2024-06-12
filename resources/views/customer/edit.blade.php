@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
        <div class="alert-danger">
            <p>ERROR ERROR ERROR</p>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Edit Pendaftaran Nasabah Kode ##{{ $customer->code }}
        </div>
        <div class="card-body">
            <form action="{{ route('customer.update') }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $customer->id }}">
                <div class="mb-2">
                    <label for="">Nama Nasabah</label>
                    <input type="text" name="name" placeholder="Nama Nasabah" class="form-control"
                    value="{{ $customer->name }}">
                </div>
                <div class="mb-2">
                    <label for="">Telepon Nasabah</label>
                            <input type="text" name="phone" placeholder="08XXX" class="form-control"
                            value="{{ $customer->phone }}">
                </div>
                <div class="mb-2">
                    <label for="">Alamat Nasabah</label>
                            <textarea name="address" cols="30" rows="3" placeholder="JL. XXX" class="form-control">{{ $customer->address }}</textarea>
                </div>
                <div class="mb-2">
                    <input type="Submit" class="Simpan" class="btn btn-success float-end">
                </div>
            </form>
        </div>
    </div>
    @endsection
