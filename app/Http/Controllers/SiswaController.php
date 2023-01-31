<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('formsiswa');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
        $jeniskelamin = $request->input('jeniskelamin');
        $hobi = $request->input('hobi');
        return 'Halo, nama saya '.$nama.', saya seorang '.$jeniskelamin.' dan hobi saya adalah '.$hobi;
    }
}
