<?php

namespace App\Http\Controllers;

use App\Models\camera;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cameraController extends Controller
{
    public function camera()
    {
        $datacamera = DB::table('datacamera')->get();

        return view('camera.return-camera', [
            'datacamera' => $datacamera,
        ]);
    }

    public function camerastr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_kamera' => 'required',
            'kondisi_tempat_kamera' => 'required',
            'kelengkapan_atribut' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $camera = new camera;
        $camera->tanggal_peminjaman = $request->tanggal_peminjaman;
        $camera->nama = $request->nama;
        $camera->kode_device     = $request->kode_device    ;
        $camera->kondisi_kamera = $request->kondisi_kamera;
        $camera->kondisi_tempat_kamera = $request->kondisi_tempat_kamera;
        $camera->kelengkapan_atribut = $request->kelengkapan_atribut;
        $camera->waktu_pengembalian = $request->waktu_pengembalian;
        $camera->save();

        DB::table('datacamera')
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
        return view('camera.create');
    }

    public function index()
    {
        $datacamera = DB::table('datacamera')->get();

        return view('camera.read', ['datacamera' => $datacamera]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('datacamera')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dikembalikan!');
        return redirect('/datacamera');
    }

    public function edit($id)
    {
        $datacamera = DB::table('datacamera')->where('id', $id)->first();

        return view('camera.update', ['datacamera' => $datacamera]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('datacamera')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/datacamera');
    }

    public function delete($id)
    {
        DB::table('datacamera')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/datacamera');
    }
}