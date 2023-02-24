<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FootnoteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function indexpenulis($jumlahpenulis){
        return view('index', ['jumlahpenulis' => $jumlahpenulis]);
    }
    public function kelola(Request $request){
        if(isset($request->input)){
            if(isset($request->penulis_1)&&isset($request->penulis_2)&&isset($request->penulis_3)){
                DB::table('footnote')->insert([
                    'penulis_1' => $request->penulis_1,
                    'penulis_2' => $request->penulis_2,
                    'penulis_3' => $request->penulis_3,
                    'judul' => $request->judul,
                    'sumber' => $request->sumber,
                    'volume' => $request->volume,
                    'nomor' => $request->nomor,
                    'tahun' => $request->tahun,
                    'halaman_awal' => $request->halaman_awal,
                    'halaman_akhir' => $request->halaman_akhir
                ]);
            } elseif (isset($request->penulis_1)&&isset($request->penulis_2)){
                DB::table('footnote')->insert([
                    'penulis_1' => $request->penulis_1,
                    'penulis_2' => $request->penulis_2,
                    'sumber' => $request->sumber,
                    'volume' => $request->volume,
                    'nomor' => $request->nomor,
                    'judul' => $request->judul,
                    'tahun' => $request->tahun,
                    'halaman_awal' => $request->halaman_awal,
                    'halaman_akhir' => $request->halaman_akhir
                ]);
            } elseif (isset($request->penulis_1)){
                DB::table('footnote')->insert([
                    'penulis_1' => $request->penulis_1,
                    'judul' => $request->judul,
                    'sumber' => $request->sumber,
                    'volume' => $request->volume,
                    'nomor' => $request->nomor,
                    'tahun' => $request->tahun,
                    'halaman_awal' => $request->halaman_awal,
                    'halaman_akhir' => $request->halaman_akhir
                ]);
            }
            return redirect('/');
        } elseif(isset($request->edit)){

        }
    }
}
