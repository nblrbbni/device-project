<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projector extends Model
{
    use HasFactory;
    protected $table = 'projector_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'kondisi_projector',
        'kondisi_kabel_power',
        'kondisi_remote',
        'waktu_pengembalian',
    ];
}
