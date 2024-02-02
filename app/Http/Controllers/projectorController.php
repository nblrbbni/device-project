<?php

namespace App\Http\Controllers;

use App\Models\projector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class projectorController extends Controller
{
    public function projector()
    {
        $device = DB::table('device')->get();

        return view('projector.return-projector', [
            'device' => $device,
        ]);
    }

    public function projectorstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_projector' => 'required',
            'kondisi_kabel_power' => 'required',
            'kondisi_remote' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $projector = new projector;
        $projector->tanggal_peminjaman = $request->tanggal_peminjaman;
        $projector->nama = $request->nama;
        $projector->kode_device = $request->kode_device;
        $projector->kondisi_projector = $request->kondisi_projector;
        $projector->kondisi_kabel_power = $request->kondisi_kabel_power;
        $projector->kondisi_remote = $request->kondisi_remote;
        $projector->waktu_pengembalian = $request->waktu_pengembalian;
        $projector->save();

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
