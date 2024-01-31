<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datahdmi extends Model
{
    use HasFactory;
    protected $table = 'datahdmi';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}