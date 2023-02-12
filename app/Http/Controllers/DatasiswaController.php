<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatasiswaController extends Controller
{
    public function index(){
        $siswa = DB::table('siswa')->get();
        return view('datasiswa', ['data' => $siswa]);
    }
}
