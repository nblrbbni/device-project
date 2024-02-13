<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamtablet extends Model
{
    use HasFactory;
    protected $table = 'pinjamtablet';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'kode_device',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}