<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HDMI extends Model
{
    use HasFactory;
    protected $table = '_h_d_m_i_penembalian';
    protected $fillable = 
    [
        'tanggal_peminjaman',
        'nama',
        'nomor_HDMI',
        'kondisi_HDMI',
        'waktu_pengembalian',
    ];
}
