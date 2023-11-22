<?php

namespace App\Http\Controllers;

use App\Models\earphone;
use Illuminate\Http\Request;

class earphoneController extends Controller
{
    public function earphone()
    {
        return view('headphone.return-headphone');
    }
    
    public function earphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kondisi_earphone' => 'required',
            'kondisi_kardus' => 'required',
            'kondisi_suara' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $earphone = new earphone;
        $earphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $earphone->nama = $request->nama;
        $earphone->kondisi_earphone = $request->kondisi_earphone;
        $earphone->kondisi_kardus = $request->kondisi_kardus;
        $earphone->kondisi_suara = $request->kondisi_suara;
        $earphone->waktu_pengembalian = $request->waktu_pengembalian;
        $earphone->save();
        return redirect()->to('/');
    }
}
