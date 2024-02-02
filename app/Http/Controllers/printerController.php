<?php

namespace App\Http\Controllers;

use App\Models\printer;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class printerController extends Controller
{
    public function printer()
    {
        $device = DB::table('device')->get();

        return view('printer.return-printer', [
            'device' => $device,
        ]);
    }

    public function printerstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_printer' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $printer = new printer;
        $printer->tanggal_peminjaman = $request->tanggal_peminjaman;
        $printer->nama = $request->nama;
        $printer->kode_device = $request->kode_device;
        $printer->kondisi_printer = $request->kondisi_printer;
        $printer->waktu_pengembalian = $request->waktu_pengembalian;
        $printer->save();


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
