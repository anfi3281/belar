<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagingController extends Controller
{
    public function index(){
        $data = DB::table('siswa')->paginate(5);

        return view('page', ['data' => $data]);
    }
}
