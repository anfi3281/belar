<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BulmaController extends Controller
{
    public function index(){
        return view('index');
    }
}
