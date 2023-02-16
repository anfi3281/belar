<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BukuController extends Controller
{
    public function index(){
        $data = DB::table('buku')->paginate(10);

        return view('buku', ['data'=>$data, 'pilihan' => 0]);
    }

    public function kelola(Request $request){
        if(isset($request->tambah)){
            DB::table('buku')->insert([
                'judul' => $request->judul,
                'penerbit' => $request->penerbit,
                'pengarang' => $request->pengarang
            ]);

            return Redirect::action('BukuController@index');
        }else if(isset($request->edit)){
            DB::table('buku')->where('id', $request->id)->update([
                'judul' => $request->judul,
                'penerbit' => $request->penerbit,
                'pengarang' => $request->pengarang
            ]);

            return redirect('/buku');
        }
    }

    public function update($id){
        $data = DB::table('buku')->paginate(10);
        $data2 = DB::table('buku')->where('id', $id)->get();

        return view('buku', ['data' => $data, 'data2' => $data2, 'pilihan' => 1]);
    }

    public function hapus($id){
        DB::table('buku')->where('id', $id)->delete();

        return redirect('/buku');
    }
}
