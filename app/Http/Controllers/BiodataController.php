<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama = "Randi Afif";
        $kelas = "TIF21B";
        $pelajaran = ["Bahasa Indonesia", "Matematika", "Bahasa Arab"];
        return view('biodata', ['nama' => $nama, 'class' => $kelas, 'makul' => $pelajaran]);
    }
}
