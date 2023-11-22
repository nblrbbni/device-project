<?php

namespace App\Http\Controllers;

use App\Models\tablet;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class tabletController extends Controller
{
    public function tablet()
    {
        return view('tablet.return-tablet');
    }


    public function tabletstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kondisi_tablet' => 'required',
            'kondisi_baterai' => 'required',
            'kondisi_charger' => 'required',
            'waktu_pengembalian' => 'required',
        ]);
    $tablet = new tablet;
    $tablet->tanggal_peminjaman = $request->tanggal_peminjaman;
    $tablet->nama = $request->nama;
    $tablet->kondisi_tablet = $request->kondisi_tablet;
    $tablet->kondisi_baterai = $request->kondisi_baterai;
    $tablet->kondisi_charger = $request->kondisi_charger;
    $tablet->waktu_pengembalian = $request->waktu_pengembalian;
    $tablet->save();
    return redirect()->to('/');
    }
    
}
