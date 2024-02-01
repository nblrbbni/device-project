<?php

namespace App\Http\Controllers;

use App\Models\handphone;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class handphoneController extends Controller
{
    public function handphone()
    {
        $device = DB::table('device')->get();

        return view('handphone.return-handphone', [
            'device' => $device,
        ]);
    }
    public function handphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
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
