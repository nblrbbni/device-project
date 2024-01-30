<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datalaptop extends Model
{
    use HasFactory;
    protected $table = 'datalaptop';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}