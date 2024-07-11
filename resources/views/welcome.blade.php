@extends('layouts.main')

@section('content')
    <div class="text-center my-5">
        <h1 class="display-4">Selamat Datang di Koperasi Lepekia</h1>
        <img src="{{ asset('images/koperasi.png') }}" alt="Deskripsi Gambar" class="img-fluid my-4">
        <p class="lead">Kami menyediakan layanan terbaik untuk keperluan keuangan Anda.</p>
        <a href="{{ route('customer.index') }}" class="btn btn-primary btn-lg">Info Nasabah</a>
    </div>
@endsection
