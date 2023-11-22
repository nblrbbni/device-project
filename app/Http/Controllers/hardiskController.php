<?php

namespace App\Http\Controllers;

use App\Models\hardisk;
use Illuminate\Http\Request;

class hardiskController extends Controller
{
    public function hardisk()
    {
       return view('hardisk.return-hardisk');
    }

    public function hardiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'nomor_hardisk' => 'required',
            'kondisi_hardisk' => 'required',
            'waktu_pengembalian' => 'required',
        ]);   

        $hardisk = new hardisk;
        $hardisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $hardisk->nama = $request->nama;
        $hardisk->nomor_hardisk = $request->nomor_hardisk;
        $hardisk->kondisi_hardisk = $request->kondisi_hardisk;
        $hardisk->waktu_pengembalian = $request->waktu_pengembalian;
        $hardisk->save();
        return redirect()->to('/');
    }
}
