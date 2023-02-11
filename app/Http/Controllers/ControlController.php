<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlController extends Controller
{
    public function index(){
        return view('control');
    }

    public function control($control){
        return view('name', ['nama' => $control]);
    }
}
