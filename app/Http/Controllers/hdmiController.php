<?php

namespace App\Http\Controllers;

use App\Models\HDMI;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class hdmiController extends Controller
{
    public function HDMI()
    {
        $datahdmi = DB::table('datahdmi')->get();

        return view('hdmi.return-hdmi', [
            'datahdmi' => $datahdmi,
        ]);
    }

    public function HDMIstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_HDMI' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $HDMI = new HDMi;
        $HDMI->tanggal_peminjaman = $request->tanggal_peminjaman;
        $HDMI->nama = $request->nama;
        $HDMI->kode_device = $request->kode_device;
        $HDMI->kondisi_HDMI = $request->kondisi_HDMI;
        $HDMI->waktu_pengembalian = $request->waktu_pengembalian;
        $HDMI->save();

        DB::table('datahdmi')
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
        return view('admin.data-device.hdmi.index');
    }

    public function index()
    {
        $datahdmi = DB::table('datahdmi')->get();

        return view('admin.data-device.hdmi.index', ['datahdmi' => $datahdmi]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('datahdmi')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/data-hdmi');
    }

    public function edit($id)
    {
        $datahdmi = DB::table('datahdmi')->where('id', $id)->first();

        return view('admin.data-device.hdmi.update', ['datahdmi' => $datahdmi]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('datahdmi')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/data-hdmi');
    }

    public function delete($id)
    {
        DB::table('datahdmi')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/data-hdmi');
    }
}
