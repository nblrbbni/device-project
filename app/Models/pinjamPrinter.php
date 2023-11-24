<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamPrinter extends Model
{
    use HasFactory;
    protected $table = 'pinjam_printer';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_printer',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
