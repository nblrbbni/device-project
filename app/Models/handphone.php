<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class handphone extends Model
{
    use HasFactory;
    protected $table = 'handphone_penembalian';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'kondisi_handphone',
        'kondisi_baterai',
        'kondisi_charger',
        'waktu_pengembalian',
    ];
}
