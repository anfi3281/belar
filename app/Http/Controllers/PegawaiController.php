<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(){
        $datapegawai = DB::table('pegawai')->get();
        return view('pegawai', ['pegawai' => $datapegawai]);
    }
}
