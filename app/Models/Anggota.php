<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'kode_anggota';
    protected $fillable = ['kode_anggota', 'nama', 'alamat', 'jenis_kelamin', 'jenis_anggota', 'denda'];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'anggota_buku', 'kode_anggota', 'kode_buku')->withPivot('tanggal_peminjaman', 'lama_peminjaman', 'status', 'kondisi', 'denda');
    }

}