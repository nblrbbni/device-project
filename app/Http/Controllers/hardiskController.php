<?php

namespace App\Http\Controllers;

use App\Models\hardisk;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class hardiskController extends Controller
{
    public function hardisk()
    {
        $device = DB::table('device')->get();

        return view('hardisk.return-hardisk', [
            'device' => $device,
        ]);
    }

    public function hardiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_hardisk' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $hardisk = new hardisk;
        $hardisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $hardisk->nama = $request->nama;
        $hardisk->kode_device = $request->kode_device;
        $hardisk->kondisi_hardisk = $request->kondisi_hardisk;
        $hardisk->waktu_pengembalian = $request->waktu_pengembalian;
        $hardisk->save();

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

