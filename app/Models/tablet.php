<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablet extends Model
{
    use HasFactory;
    protected $table = 'tablet_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'tanggal_peminjaman',
        'kondisi_tablet',
        'kondisi_baterai',
        'kondisi_baterai',
        'waktu_pengembalian',
    ];
}
