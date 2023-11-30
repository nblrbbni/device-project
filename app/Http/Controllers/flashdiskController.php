<?php

namespace App\Http\Controllers;

use App\Models\flashdisk;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class flashdiskController extends Controller
{
    public function flasdisk()
    {
        $device = DB::table('device')->get();

        return view('flashdisk.return-flashdisk', [
            'device' => $device,
        ]);
    }

    public function flasdiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_flashdisk' => 'required',
            'waktu_pengembalian' => 'required',
        ]);
        $flashdisk = new flashdisk;
        $flashdisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $flashdisk->nama = $request->nama;
        $flashdisk->kode_device = $request->kode_device;
        $flashdisk->kondisi_flashdisk = $request->kondisi_flashdisk;
        $flashdisk->waktu_pengembalian = $request->waktu_pengembalian;
        $flashdisk->save();

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

