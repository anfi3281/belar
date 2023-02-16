<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index(){
        $data = DB::table('buku')->paginate(10);

        return view('buku', ['data'=>$data]);
    }
}
