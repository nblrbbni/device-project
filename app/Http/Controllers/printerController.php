<?php

namespace App\Http\Controllers;

use App\Models\printer;
use Illuminate\Http\Request;

class printerController extends Controller
{
    public function printer()
    {
        return view('printer.return-printer');
    }

    public function printerstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kondisi_printer' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $printer = new printer;
        $printer->tanggal_peminjaman = $request->tanggal_peminjaman;
        $printer->nama = $request->nama;
        $printer->kondisi_printer = $request->kondisi_printer;
        $printer->waktu_pengembalian = $request->waktu_pengembalian;
        $printer->save();
        return redirect()->to('/');
    }

    
}
