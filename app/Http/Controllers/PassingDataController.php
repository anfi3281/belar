<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassingDataController extends Controller
{
    public function index(){
        $nama = "Randi Afif";
        $nim = "101210072";
        $kesukaan = ['ngoding', 'makan', 'minum'];
        return view('pd', ['nama' => $nama, 'kesukaan' => $kesukaan, 'nim' => $nim]);
    }
}
