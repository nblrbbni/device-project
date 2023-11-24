<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamFlashdisk extends Model
{
    use HasFactory;
    protected $table = 'pinjam_flashdisk';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_flashdisk',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
