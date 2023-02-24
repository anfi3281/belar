<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FootnoteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function indexpenulis($jumlahpenulis){
        return view('index', ['jumlahpenulis' => $jumlahpenulis]);
    }
}
