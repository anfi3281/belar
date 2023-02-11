<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index(){
        return view('buku');
    }

    public function cek(Request $request){
        $nama = $request->input('nama');
        $tahun = $request->input('tahun');
        return view('cek', ['nama' => $nama, 'tahun' => $tahun]);
    }
}
