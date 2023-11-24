<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamProjector extends Model
{
    use HasFactory;
    protected $table = 'pinjam_projector';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_projector',
        'mentoring_mapel',
        'waktu_pengembalian',
    ];
}
