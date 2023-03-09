@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
<h1>Ini Halaman Home</h1>
<h2>Selamat Datang, {{ $name }}</h2>
<h3>Anda Adalah, {{ $role }}</h3>

<p>untuk melihat data silahkan ke halaman Mahasiswa</p>
@endsection