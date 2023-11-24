<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamEarphone extends Model
{
    use HasFactory;
    protected $table = 'pinjam_earphone';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_earphone',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];

}
