<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = \App\Models\Buku::paginate(5);
        return view('buku.index',['data_buku' => $data_buku]);
    }

    public function create(Request $request)
    {
        \App\Models\Buku::create($request->all()); 
        return redirect('/buku')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($kode_buku)
    {
        $buku = \App\Models\Buku::find($kode_buku);
        return view('buku/edit', ['buku'=>$buku]);
    }

    public function update(Request $request,$kode_buku)
    {
        $buku = \App\Models\Buku::find($kode_buku);
        $buku -> update($request->all());
        return redirect('/buku')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($kode_buku)
    {
        $buku = \App\Models\Buku::find($kode_buku);
        $buku -> delete($buku);
        return redirect('/buku')->with('sukses', 'Data berhasil dihapus');
    }
}