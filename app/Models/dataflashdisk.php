<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataflashdisk extends Model
{
    use HasFactory;
    protected $table = 'dataflashdisk';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}