<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'kode_buku';
    protected $fillable = ['kode_buku', 'nama_buku', 'nama_pengarang', 'tahun_terbit', 'isbn', 'status', 'kondisi'];

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class, 'anggota_buku', 'kode_buku', 'kode_anggota')->withPivot('tanggal_peminjaman','lama_peminjaman', 'status', 'kondisi', 'denda');
    }

}
