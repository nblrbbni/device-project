<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataheadphone extends Model
{
    use HasFactory;
    protected $table = 'dataheadphone';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}