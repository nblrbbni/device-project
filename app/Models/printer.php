<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class printer extends Model
{
    use HasFactory;
    protected $table = 'printer_penembalian';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'kondisi_printer',
        'waktu_pengembalian',
    ];
}
