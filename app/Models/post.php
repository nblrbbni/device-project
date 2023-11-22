<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table = 'laptop_penembalian';
    protected $fillable = ['tanggal_peminjaman', 'nama', 'kondisi_mouse', 'kondisi_laptop', 'kondisi_keybohard', 'waktu_pengembalian'];
}
