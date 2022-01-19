@extends('layouts.main')

{{-- container ini dikirimkan ke file main lalu dipanggil oleh yield('container') --}}
@section('container')
    <h1>Halaman about</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $gambar }}" alt="{{ $name }}" width="300px">    
    <p class="mt-3">Just a student who want to be a software engineer/programmer</p>
@endsection

