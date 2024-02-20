<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datacomputer extends Model
{
    use HasFactory;
    protected $table = 'datacomputer';
    protected $fillable = ['kode_device', 'laboratorium', 'nama', 'merk', 'status'];
}
