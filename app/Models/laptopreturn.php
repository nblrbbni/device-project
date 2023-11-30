<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laptopreturn extends Model
{
    use HasFactory;
    protected $table = 'laptop_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'kode_device',
        'kondisi_device',
        'kondisi_mouse',
        'kondisi_laptop',
        'kondisi_keybohard',
        'waktu_pengembalian',
    ];
}
