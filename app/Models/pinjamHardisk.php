<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamHardisk extends Model
{
    use HasFactory;
    protected $table = 'pinjam_hardisk';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_hardisk',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
