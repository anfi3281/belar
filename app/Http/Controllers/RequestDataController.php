<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestDataController extends Controller
{
    public function index(){
        return view('rd');
    }

    public function submit(Request $request){
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        return 'Halo, nama saya ' . $nama . ' dan nim saya adalah ' . $nim;
    }
}
