<?php

namespace App\Http\Controllers;

use App\Models\camera;
use Illuminate\Http\Request;

class cameraController extends Controller
{
    public function camera()
    {
        return view('camera.return-camera');
    }

    public function camerastr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kondisi_kamera' => 'required',
            'kondisi_tempat_kamera' => 'required',
            'kelengkapan_atribut' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $camera = new camera;
        $camera->tanggal_peminjaman = $request->tanggal_peminjaman;
        $camera->nama = $request->nama;
        $camera->kondisi_kamera = $request->kondisi_kamera;
        $camera->kondisi_tempat_kamera = $request->kondisi_tempat_kamera;
        $camera->kelengkapan_atribut = $request->kelengkapan_atribut;
        $camera->waktu_pengembalian = $request->waktu_pengembalian;
        $camera->save();
        return redirect()->to('/');
    }
}
