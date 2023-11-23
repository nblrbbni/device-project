<?php

namespace App\Http\Controllers;

use App\Models\lan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class LanController extends Controller
{
    public function lan()
    {
        return view('Lan.return-lan');
    }

    public function lanstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'nomor_LAN' => 'required',
            'kondisi_LAN' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $lan = new lan;
        $lan->tanggal_peminjaman = $request->tanggal_peminjaman;
        $lan->nama = $request->nama;
        $lan->nomor_LAN = $request->nomor_LAN;
        $lan->kondisi_LAN = $request->kondisi_LAN;
        $lan->waktu_pengembalian = $request->waktu_pengembalian;
        $lan->save();
        Alert::success('Berhasil!', 'Perangkat Anda berhasil dikembalikan!');
        return redirect()->to('/');
    }
}
