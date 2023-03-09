<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); //select* from student
        return view('mahasiswa', ['mahasiswaList' => $mahasiswa]);
    }
}
