<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PC extends Model
{
    use HasFactory;
    protected $table = '_p_c_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'kondisi_mouse',
        'kondisi_pc',
        'kondisi_keybohard',
        'waktu_pengembalian',
    ];
}
