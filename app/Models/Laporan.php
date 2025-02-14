<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    // Laporan.php
public function anggota()
{
    return $this->belongsTo(Anggota::class);
}

public function buku()
{
    return $this->belongsTo(Buku::class);
}

}