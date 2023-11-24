<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamCamera extends Model
{
    use HasFactory;
    protected $table = 'pinjam_camera';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_camera',
        'mentoring_mapel',
        'waktu_pengembalian',
    ];
}
