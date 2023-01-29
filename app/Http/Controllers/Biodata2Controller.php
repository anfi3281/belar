<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodata2Controller extends Controller
{
    public function index($kelas){
        $nama = "Randi Afif";
        return view('biodata2', ['nama' => $nama, 'kelas' => $kelas]);
    }
}
