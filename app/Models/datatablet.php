<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datatablet extends Model
{
    use HasFactory;
    protected $table = 'datatablet';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}