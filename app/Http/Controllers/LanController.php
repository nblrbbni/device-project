<?php

namespace App\Http\Controllers;

use App\Models\lan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LanController extends Controller
{
    public function lan()
    {
        $device = DB::table('device')->get();

        return view('Lan.return-lan', [
            'device' => $device,
        ]);
    }

    public function lanstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_LAN' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $lan = new lan;
        $lan->tanggal_peminjaman = $request->tanggal_peminjaman;
        $lan->nama = $request->nama;
        $lan->kondisi_LAN = $request->kondisi_LAN;
        $lan->waktu_pengembalian = $request->waktu_pengembalian;
        $lan->save();

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
