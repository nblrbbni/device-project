<?php

namespace App\Http\Controllers;

use App\Models\PC;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PcController extends Controller
{
    public function computer()
    {
        $datacomputer = DB::table('datacomputer')->get();

        return view('computer.return-pc', [
            'datacomputer' => $datacomputer,
        ]);
    }

    public function computerstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_mouse' => 'required',
            'kondisi_pc' => 'required',
            'kondisi_keybohard' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $PC = new pc;
        $PC->tanggal_peminjaman = $request->tanggal_peminjaman;
        $PC->nama = $request->nama;
        $PC->kode_device = $request->kode_device;
        $PC->kondisi_mouse = $request->kondisi_mouse;
        $PC->kondisi_pc = $request->kondisi_pc;
        $PC->kondisi_keybohard = $request->kondisi_keybohard;
        $PC->waktu_pengembalian = $request->waktu_pengembalian;
        $PC->save();

        DB::table('datacomputer')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Tersedia',
            ],
        );

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dikembalikan!');
        return redirect()->to('/');

    }

    public function create()
    {
        return view('admin.data-device.computer.index');
    }

    public function index()
    {
        $datacomputer = DB::table('datacomputer')->get();

        return view('admin.data-device.computer.index', ['datacomputer' => $datacomputer]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'laboratorium' => 'required',
            'status'
        ]);

        DB::table('datacomputer')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'laboratorium' => $request['laboratorium'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/data-computer');
    }

    public function edit($id)
    {
        $datacomputer = DB::table('datacomputer')->where('id', $id)->first();

        return view('admin.data-device.computer.update', ['datacomputer' => $datacomputer]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'laboratorium' => 'required',
        ]);

        DB::table('datacomputer')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                    'laboratorium' => $request->laboratorium,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/data-computer');
    }

    public function delete($id)
    {
        DB::table('datacomputer')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/data-computer');
    }
}
