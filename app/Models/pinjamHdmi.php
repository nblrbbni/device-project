<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamHdmi extends Model
{
    use HasFactory;
    protected $table = 'pinjam_hdmi';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'nomor_hdmi',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
