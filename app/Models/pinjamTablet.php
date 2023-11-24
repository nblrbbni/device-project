<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamTablet extends Model
{
    use HasFactory;
    protected $table = 'pinjam_tablet';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_tablet',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
