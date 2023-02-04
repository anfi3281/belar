<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        return view('home');
        
    }

    public function login(Request $req){
        $username = $req->input('ue');
        $password = $req->input('pd');

        $login = DB::table('SYSBPS_LOGIN')->get();
        return view('login', ['login' => $login, 'username' => $username, 'password' => $password]);
    }
}
