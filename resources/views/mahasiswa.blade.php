@extends('layouts.mainlayout')

@section('title', 'Mahasiswa')

@section('content')
    <h1>Ini Halaman Mahasiswa</h1>
    <h3>List Mahasiswa</3>
    <ol>
        @foreach ($mahasiswaList as $data)
        <li>
            {{$data->name}} | {{$data->nim}}
        </li>
        @endforeach
    </ol>

@endsection