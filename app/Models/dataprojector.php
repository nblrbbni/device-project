<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataprojector extends Model
{
    use HasFactory;
    protected $table = 'dataprojector';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}