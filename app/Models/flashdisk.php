<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flashdisk extends Model
{
    use HasFactory;
    protected $table = 'flasdisk_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'nomor_flashdisk',
        'kondisi_flashdisk',
        'waktu_pengembalian',
    ];
}

