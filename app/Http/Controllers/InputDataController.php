<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputDataController extends Controller
{
    public function form(){
        return view('inputdata');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Halo, nama saya " . $nama . " dan Alamat saya " . $alamat;
    }
}
