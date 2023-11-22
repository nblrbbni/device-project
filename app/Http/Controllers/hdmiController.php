<?php

namespace App\Http\Controllers;

use App\Models\HDMI;
use Illuminate\Http\Request;

class hdmiController extends Controller
{
    public function HDMI()
    {
        return view('hdmi.return-hdmi');
    }

    public function HDMIstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'nomor_HDMI' => 'required',
            'kondisi_HDMI' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $HDMI = new HDMi;
        $HDMI->tanggal_peminjaman = $request->tanggal_peminjaman;
        $HDMI->nama = $request->nama;
        $HDMI->nomor_HDMI = $request->nomor_HDMI;
        $HDMI->kondisi_HDMI = $request->kondisi_HDMI;
        $HDMI->waktu_pengembalian = $request->waktu_pengembalian;
        $HDMI->save();
        return redirect()->to('/');
    }
}
