<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datahandphone extends Model
{
    use HasFactory;
    protected $table = 'datahandphone';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}