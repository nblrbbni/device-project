<?php

namespace App\Http\Controllers;

use App\Models\flashdisk;
use Illuminate\Http\Request;

class flashdiskController extends Controller
{
    public function flasdisk()
    {
        return view('flashdisk.return-flashdisk');
    }

    public function flasdiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'nomor_flashdisk' => 'required',
            'kondisi_flashdisk' => 'required',
            'waktu_pengembalian' => 'required',
        ]);
        $flashdisk = new flashdisk;
        $flashdisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $flashdisk->nama = $request->nama;
        $flashdisk->nomor_flashdisk = $request->nomor_flashdisk;
        $flashdisk->kondisi_flashdisk = $request->kondisi_flashdisk;
        $flashdisk->waktu_pengembalian = $request->waktu_pengembalian;
        $flashdisk->save();
        return redirect()->to('/');
        
    }
}
