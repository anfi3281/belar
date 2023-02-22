<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CobaController extends Controller
{
    public function index(){
        $pegawai = DB::table('pegawai')->paginate(6);
        $no = 0;
        return view('index', ['pegawai' => $pegawai, 'no' => $no]);
    }

    public function kelola(Request $request){
        if(isset($request->enter)){
            DB::table('pegawai')->insert([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan
            ]);

            return redirect('/coba');
        }else if(isset($request->ubah)){
            DB::table('pegawai')->where('id', $request->urutan)->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan
            ]);
            return redirect('/coba');
        }
    }

    public function cari(Request $request){
        if(isset($request->find)){
            $data = DB::table('pegawai')->where('nama', 'like', '%'.$request->cari.'%')->paginate(6);
            $no = 0;
            return view('index', ['pegawai' => $data, 'no' => $no]);
        }else if(isset($request->reset)){
            return redirect('/coba');
        }
    }

    public function edit($urutan){
        $pegawai = DB::table('pegawai')->paginate(6);
        $pegawai2 = DB::table('pegawai')->where('id', $urutan)->get();
        $no = 1;
        return view('index', ['pegawai' => $pegawai, 'pegawai2' => $pegawai2, 'no' => $no]);
    }
    public function hapus($urutan){
        DB::table('pegawai')->where('id', $urutan)->delete();
        return redirect('/coba');
    }
}
