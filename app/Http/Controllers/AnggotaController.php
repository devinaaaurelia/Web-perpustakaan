<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_anggota = \App\Models\Anggota::where('nama', 'LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_anggota = \App\Models\Anggota::paginate(5);
        }
        
        return view('anggota.index',['data_anggota' => $data_anggota]);
    }

    public function create(Request $request)
    {
        \App\Models\Anggota::create($request->all()); 
        return redirect('/anggota')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($kode_anggota)
    {
        $anggota = \App\Models\Anggota::find($kode_anggota);
        return view('anggota/edit', ['anggota'=>$anggota]);
    }

    public function update(Request $request,$kode_anggota)
    {
        $anggota = \App\Models\Anggota::find($kode_anggota);
        $anggota -> update($request->all());
        return redirect('/anggota')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($kode_anggota)
    {
        $anggota = \App\Models\Anggota::find($kode_anggota);
        $anggota -> delete($anggota);
        return redirect('/anggota')->with('sukses', 'Data berhasil dihapus');
    }
}
