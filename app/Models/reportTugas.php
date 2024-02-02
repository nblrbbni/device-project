<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportTugas extends Model
{
    use HasFactory;
    protected $table = 'report_tugas';
    protected $fillable =
    [
        'nama',
        'foto',
        'link',
        'email',
    ];
}

