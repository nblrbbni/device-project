<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lan extends Model
{
    use HasFactory;
    protected $table = 'lan_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'kode_device',
        'kondisi_LAN',
        'waktu_pengembalian',
    ];
}
