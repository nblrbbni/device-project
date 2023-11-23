<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hardisk extends Model
{
    use HasFactory;
    protected $table = 'hardisk_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'nomor_hardisk',
        'kondisi_hardisk',
        'waktu_pengembalian',
    ];
}
