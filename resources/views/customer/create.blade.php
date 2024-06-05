@extends('layouts.main')

@section('content')
    @if (count($errors) > 0)
        <div class="alert-danger">
            <p>ERROR ERROR ERROR</p>
            @foreach ($error->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Pendaftaran Nasabah
        </div>
        <div class="card-body">
            <form action="{{ route('customer.store') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="">Kode Nasabah</label>
                            <input type="text" name="code" placeholder="XXXXX" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Nama Nasabah</label>
                    <input type="text" name="Nama" placeholder="Nama Nasabah" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Telepon Nasabah</label>
                            <input type="text" name="phone" placeholder="08XXX" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Alamat Nasabah</label>
                            <textarea name="address" cols="30" rows="3" placeholder="JL. XXX" class="form-control"></textarea>
                </div>
                <div class="mb-2">
                    <input type="Submit" class="Simpan" class="btn btn-success float-end">
                </div>
            </form>
        </div>
    </div>
    @endsection
