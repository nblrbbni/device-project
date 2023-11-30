<?php

namespace App\Http\Controllers;

use App\Models\tablet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class tabletController extends Controller
{
    public function tablet()
    {
        $device = DB::table('device')->get();

        return view('tablet.return-tablet', [
            'device' => $device,
        ]);
    }

    public function tabletstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_tablet' => 'required',
            'kondisi_baterai' => 'required',
            'kondisi_charger' => 'required',
            'waktu_pengembalian' => 'required',
        ]);
    $tablet = new tablet;
    $tablet->tanggal_peminjaman = $request->tanggal_peminjaman;
    $tablet->nama = $request->nama;
    $tablet->kode_device = $request->kode_device;
    $tablet->kondisi_tablet = $request->kondisi_tablet;
    $tablet->kondisi_baterai = $request->kondisi_baterai;
    $tablet->kondisi_charger = $request->kondisi_charger;
    $tablet->waktu_pengembalian = $request->waktu_pengembalian;
    $tablet->save();

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
