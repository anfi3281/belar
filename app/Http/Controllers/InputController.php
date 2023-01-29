<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $kelas = $request->input('kelas');
        return "Halo, perkenalkan nama saya " . $nama . " dan saya kelas " . $kelas;
    }
}
