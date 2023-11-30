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
        'kode_device',
        'kondisi_flashdisk',
        'waktu_pengembalian',
    ];
}

