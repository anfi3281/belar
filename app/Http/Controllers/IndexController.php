<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $data = DB::table('pegawai')->paginate(2);

        return view('index', ['data' => $data]);
    }

    public function cari(Request $request){
        $cari = $request->cari;
        $data = DB::table('pegawai')->where('pegawai_nama','like',"%".$cari."%")->paginate();

        return view('index', ['data' => $data]);
    }
}
