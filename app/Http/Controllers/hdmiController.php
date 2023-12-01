<?php

namespace App\Http\Controllers;

use App\Models\HDMI;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class hdmiController extends Controller
{
    public function HDMI()
    {
        $device = DB::table('device')->get();

        return view('hdmi.return-hdmi', [
            'device' => $device,
        ]);
    }

    public function HDMIstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_HDMI' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $HDMI = new HDMi;
        $HDMI->tanggal_peminjaman = $request->tanggal_peminjaman;
        $HDMI->nama = $request->nama;
        $HDMI->kode_device = $request->kode_device;
        $HDMI->kondisi_HDMI = $request->kondisi_HDMI;
        $HDMI->waktu_pengembalian = $request->waktu_pengembalian;
        $HDMI->save();

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
