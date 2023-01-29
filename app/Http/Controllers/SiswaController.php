<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index($nama, $kelas){
        $pelajaran = ["Bahasa Indonesia", "Matematika", "IPA"];
        // return "Halo, apa kabar";
        return view('siswa', ['nama' => $nama, 'kelas' => $kelas, 'pelajaran' => $pelajaran]);
    }
}
