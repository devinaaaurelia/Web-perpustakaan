<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class LaporanController extends Controller

{
    public function index()
    {
        // Ambil data dari model
        $anggota = Anggota::all();
        // Kirim data ke tampilan
        return view('laporan.index', compact('anggota'));
    }

    public function cetak()
    {
        // Ambil data dari model
        $anggota = Anggota::all();
        // Kirim data ke tampilan
        return view('laporan.cetak', compact('anggota'));
    }
}
