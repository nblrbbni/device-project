<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamflashdisk extends Model
{
    use HasFactory;
    protected $table = 'pinjamflashdisk';
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
