<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datacamera extends Model
{
    use HasFactory;
    protected $table = 'datacamera';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}