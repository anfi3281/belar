<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FootnoteController extends Controller
{
    public function index(){
        $data = DB::table('footnote')->paginate(10);

        return view('index', ['data' => $data]);
    }
    public function indexpenulis($jumlahpenulis){
        $data = DB::table('footnote')->paginate(10);
        return view('index', ['jumlahpenulis' => $jumlahpenulis, 'data' => $data]);
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
                    'halaman_akhir' => $request->halaman_akhir,
                    'jumlah_penulis' => $request->jumlah_penulis
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
                    'halaman_akhir' => $request->halaman_akhir,
                    'jumlah_penulis' => $request->jumlah_penulis
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
                    'halaman_akhir' => $request->halaman_akhir,
                    'jumlah_penulis' => $request->jumlah_penulis
                ]);
            }
            return redirect('/');
        } elseif(isset($request->edit)){

        }
    }
}
