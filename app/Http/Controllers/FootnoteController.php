<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FootnoteController extends Controller
{
    public function index(){
        return redirect('/1/1');
    }

    public function indexpenulis($jenis, $jumlahpenulis){
        $data = DB::table('footnote')->paginate(10);
        $nom = DB::table('footnote')->orderBy('id', 'DESC')->first();
        $nomo = $nom->id + 1;
        return view('index', ['jenis' => $jenis, 'jumlahpenulis' => $jumlahpenulis, 'data' => $data, 'nomor' => $nomo]);
    }
    public function kelola(Request $request){
        if(isset($request->tomboljenis)){
            switch($request->jenis_footnote){
                case(1):
                    return redirect('/1/'.$request->jp);
                    break;
                case(2):
                    return redirect('/2/'.$request->jp);
                    break;
            }

        }

        if(isset($request->input)){
            if($request->jenisf == 1){
                if(isset($request->penulis_1)&&isset($request->penulis_2)&&isset($request->penulis_3)){
                    $urutan = $request->urut + 1;
                    if($request->nourut !== $request->$urutan){
                        for($i = $request->urut; $i >= $request->nourut; $i--){
                            $x = $i + 1;
                            DB::table('footnote')->where('id', $i)->update([
                                'id' => $x
                            ]);
                        }
                    }
                    DB::table('footnote')->insert([
                        'id' => $request->nourut,
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
            } elseif($request->jenisf == 2){
                DB::table('footnote')->insert([
                    'judul_web' => $request->judul_web,
                    'deskripsi_web' => $request->deskripsi_web,
                    'tahun_web' => $request->tahun_web,
                    'link_web' => $request->link_web,
                    'tanggal_diakses_web' => $request->tanggal_diakses_web
                ]);
                return redirect('/2/'.$request->jenisf);
            }

        } elseif(isset($request->edit)){

        }
    }
}
