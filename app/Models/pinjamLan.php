<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamLan extends Model
{
    use HasFactory;
    protected $table = 'pinjam_lan';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_lan',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
