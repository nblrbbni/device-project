<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datahardisk extends Model
{
    use HasFactory;
    protected $table = 'datahardisk';
    protected $fillable = ['kode_device', 'nama', 'merk', 'status'];
}