<?php

namespace App\Http\Controllers;

use App\Models\camera;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cameraController extends Controller
{
    public function camera()
    {
        $device = DB::table('device')->get();

        return view('camera.return-camera', [
            'device' => $device,
        ]);
    }

    public function camerastr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_kamera' => 'required',
            'kondisi_tempat_kamera' => 'required',
            'kelengkapan_atribut' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $camera = new camera;
        $camera->tanggal_peminjaman = $request->tanggal_peminjaman;
        $camera->nama = $request->nama;
        $camera->kode_device     = $request->kode_device    ;
        $camera->kondisi_kamera = $request->kondisi_kamera;
        $camera->kondisi_tempat_kamera = $request->kondisi_tempat_kamera;
        $camera->kelengkapan_atribut = $request->kelengkapan_atribut;
        $camera->waktu_pengembalian = $request->waktu_pengembalian;
        $camera->save();

        DB::table('device')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Tersedia',
            ],
        );

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dikembalikan!');
        return redirect()->to('/');
    }
}
