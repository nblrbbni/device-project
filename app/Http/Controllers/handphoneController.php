<?php

namespace App\Http\Controllers;

use App\Models\handphone;
use Illuminate\Http\Request;

class handphoneController extends Controller
{
    public function handphone()
    {
        return view('handphone.return-handphone');
    }
    public function handphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kondisi_handphone' => 'required',
            'kondisi_baterai' => 'required',
            'kondisi_charger' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $handphone = new handphone;
        $handphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $handphone->nama = $request->nama;
        $handphone->kondisi_handphone = $request->kondisi_handphone;
        $handphone->kondisi_baterai = $request->kondisi_baterai;
        $handphone->kondisi_charger = $request->kondisi_charger;
        $handphone->waktu_pengembalian = $request->waktu_pengembalian;
        $handphone->save();
        return redirect()->to('/');
    }
}
