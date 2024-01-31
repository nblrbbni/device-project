<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalan extends Model
{
    use HasFactory;
    protected $table = 'datalan';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}