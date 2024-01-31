<?php

namespace App\Http\Controllers;

use App\Models\flashdisk;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class flashdiskController extends Controller
{
    public function flasdisk()
    {
        $dataflashdisk = DB::table('dataflashdisk')->get();

        return view('flashdisk.return-flashdisk', [
            'dataflashdisk' => $dataflashdisk,
        ]);
    }

    public function flasdiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_flashdisk' => 'required',
            'waktu_pengembalian' => 'required',
        ]);
        $flashdisk = new flashdisk;
        $flashdisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $flashdisk->nama = $request->nama;
        $flashdisk->kode_device = $request->kode_device;
        $flashdisk->kondisi_flashdisk = $request->kondisi_flashdisk;
        $flashdisk->waktu_pengembalian = $request->waktu_pengembalian;
        $flashdisk->save();

        DB::table('dataflashdisk')
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
        return view('flashdisk.create');
    }

    public function index()
    {
        $dataflashdisk = DB::table('dataflashdisk')->get();

        return view('flashdisk.read', ['dataflashdisk' => $dataflashdisk]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('dataflashdisk')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/dataflashdisk');
    }

    public function edit($id)
    {
        $dataflashdisk = DB::table('dataflashdisk')->where('id', $id)->first();

        return view('flashdisk.update', ['dataflashdisk' => $dataflashdisk]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('dataflashdisk')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/dataflashdisk');
    }

    public function delete($id)
    {
        DB::table('dataflashdisk')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/dataflashdisk');
    }
}