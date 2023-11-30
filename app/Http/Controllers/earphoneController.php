<?php

namespace App\Http\Controllers;

use App\Models\earphone;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class earphoneController extends Controller
{
    public function earphone()
    {
        $device = DB::table('device')->get();

        return view('headphone.return-headphone', [
            'device' => $device,
        ]);
    }

    public function earphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_earphone' => 'required',
            'kondisi_kardus' => 'required',
            'kondisi_suara' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $earphone = new earphone;
        $earphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $earphone->nama = $request->nama;
        $earphone->kode_device = $request->kode_device;
        $earphone->kondisi_earphone = $request->kondisi_earphone;
        $earphone->kondisi_kardus = $request->kondisi_kardus;
        $earphone->kondisi_suara = $request->kondisi_suara;
        $earphone->waktu_pengembalian = $request->waktu_pengembalian;
        $earphone->save();

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
