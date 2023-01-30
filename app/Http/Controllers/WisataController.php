<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index(){
        return view('index');
    }
    public function details(){
        return view('details');
    }
    public function checkout(){
        return view('checkout');
    }
    public function success(){
        return view('success');
    }
}
