<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamcomputer extends Model
{
    use HasFactory;
    protected $table = 'pinjamcomputer';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'mata_pelajaran',
        'kode_device',
        'laboratorium',
        'mentoring_mapel',
        'waktu_peminjaman',
    ];
}
