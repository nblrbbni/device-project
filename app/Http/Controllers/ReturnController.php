<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function showReturnForm()
    {
        $kode_device = DB::table('device')->get();

        return view('returndevice', compact('kode_device'));
    }
}