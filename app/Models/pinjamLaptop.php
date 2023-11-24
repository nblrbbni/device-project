<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamLaptop extends Model
{
    use HasFactory;
    protected $table = 'pinjam_laptop';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_laptop',
        'mentoring_mapel',
        'waktu_pengembalian',
    ];

}
