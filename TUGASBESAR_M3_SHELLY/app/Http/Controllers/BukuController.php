<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')->get(); 
        return view('katalog', compact('buku')); 
    }

    public function detail()
    {
        $buku = DB::table('buku')->get(); 
        return view('buku', compact('buku'));
    }

    public function store(Request $request)
    {
        DB::table('buku')->insert([
            'kode'     => $request->kode,
            'nama'     => $request->nama,
            'penerbit' => $request->penerbit,
            'tahun'    => $request->tahun,
            'kategori' => $request->kategori,
            'status'   => $request->status,
        ]);

        return redirect('/buku');
    }

    public function update(Request $request, $id)
    {
        DB::table('buku')->where('id', $id)->update([
            'kode'     => $request->kode,
            'nama'     => $request->nama,
            'penerbit' => $request->penerbit,
            'tahun'    => $request->tahun,
            'kategori' => $request->kategori,
            'status'   => $request->status,
        ]);

        return redirect('/buku');
    }

    public function destroy($id)
    {
        DB::table('buku')->where('id', $id)->delete();
        return redirect('/buku');
    }

    
    public function edit($id)
    {
        $buku = DB::table('buku')->where('id', $id)->first();
        return view('edit', compact('buku'));
    }
}