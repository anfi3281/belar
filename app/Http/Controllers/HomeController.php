<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home($sesi){
        $auth = DB::table('SYSBPS_AUTH')->get();
        return view('pin', ['login' => $auth, 'sesi' => $sesi]);
    }

    public function awal(){
        return redirect('/');
    }

    public function login(Request $req){
        $username = $req->input('ue');
        $password = $req->input('pd');
        $capt = $req->input('na');

        $login = DB::table('SYSBPS_LOGIN')->get();
        $captcha = DB::table('SYSBPS_CAPTCHA')->get();
        return view('login', ['login' => $login, 'username' => $username, 'password' => $password, 'captcha' => $captcha, 'capt' => $capt]);
    }

    public function pin(){
        return view('pin');
    }

    public function core($sesi1, $sesi2){
        $login = DB::table('SYSBPS_LOGIN')->get();
        $auth = DB::table('SYSBPS_AUTH')->get();
            return view('home', ['login' => $login, 'auth' => $auth , 'sesi1' => $sesi1, 'sesi2' => $sesi2]);
    }

    public function cekpin($sesi, Request $req){
        $cekpin = $req->input('pn');
        $pin = DB::table('SYSBPS_LOGIN')->get();
        $auth = DB::table('SYSBPS_AUTH')->get();
        return view('cekpin', ['sesi' => $sesi, 'pin' => $pin, 'auth' => $auth , 'cekpin' => $cekpin]);
    }
}
