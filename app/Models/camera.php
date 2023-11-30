<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camera extends Model
{
    use HasFactory;
    protected $table = 'camera_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'kode_device',
        'kondisi_kamera',
        'kondisi_tempat_kamera',
        'kelengkapan_atribut',
        'waktu_pengembalian',
    ];
}

