<?php

namespace App\Http\Controllers;

use App\Models\PC;
use Illuminate\Http\Request;

class PcController extends Controller
{
    public function computer()
    {
        return view('computer.return-pc');
    }

    public function computerstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kondisi_mouse' => 'required',
            'kondisi_pc' => 'required',
            'kondisi_keybohard' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $PC = new pc;
        $PC->tanggal_peminjaman = $request->tanggal_peminjaman;
        $PC->nama = $request->nama;
        $PC->kondisi_mouse = $request->kondisi_mouse;
        $PC->kondisi_pc = $request->kondisi_pc;
        $PC->kondisi_keybohard = $request->kondisi_keybohard;
        $PC->waktu_pengembalian = $request->waktu_pengembalian;
        $PC->save();
        return redirect()->to('/');

    }
}
