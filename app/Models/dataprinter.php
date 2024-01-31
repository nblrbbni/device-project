<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataprinter extends Model
{
    use HasFactory;
    protected $table = 'dataprinter';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}