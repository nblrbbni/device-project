<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class earphone extends Model
{
    use HasFactory;
    protected $table = 'earphone_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'kode_device',
        'kondisi_earphone',
        'kondisi_kardus',
        'kondisi_suara',
        'waktu_pengembalian',
    ];
}
