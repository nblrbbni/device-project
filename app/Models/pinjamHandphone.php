<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamHandphone extends Model
{
    use HasFactory;
    protected $table = 'pinjam_handphone';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_handphone',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
