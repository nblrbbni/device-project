<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class earphone extends Model
{
    use HasFactory;
    protected $table = 'earphone_penembalian';
    protected $fillable =
    [
        'tanggal_peminjaman',
        'nama',
        'kondisi_earphone',
        'kondisi_kardus',
        'kondisi_suara',
        'waktu_pengembalian',
    ];
}
