<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamKomputer extends Model
{
    use HasFactory;
    protected $table = 'pinjam_komputer';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_komputer',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
