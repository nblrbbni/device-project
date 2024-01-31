<?php

namespace App\Http\Controllers;

use App\Models\tablet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class tabletController extends Controller
{
    public function tablet()
    {
        $datatablet = DB::table('datatablet')->get();

        return view('tablet.return-tablet', [
            'datatablet' => $datatablet,
        ]);
    }

    public function tabletstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_tablet' => 'required',
            'kondisi_baterai' => 'required',
            'kondisi_charger' => 'required',
            'waktu_pengembalian' => 'required',
        ]);
    $tablet = new tablet;
    $tablet->tanggal_peminjaman = $request->tanggal_peminjaman;
    $tablet->nama = $request->nama;
    $tablet->kode_device = $request->kode_device;
    $tablet->kondisi_tablet = $request->kondisi_tablet;
    $tablet->kondisi_baterai = $request->kondisi_baterai;
    $tablet->kondisi_charger = $request->kondisi_charger;
    $tablet->waktu_pengembalian = $request->waktu_pengembalian;
    $tablet->save();

    DB::table('datatablet')
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
        return view('tablet.create');
    }

    public function index()
    {
        $datatablet = DB::table('datatablet')->get();

        return view('tablet.read', ['datatablet' => $datatablet]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('datatablet')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/datatablet');
    }

    public function edit($id)
    {
        $datatablet = DB::table('datatablet')->where('id', $id)->first();

        return view('tablet.update', ['datatablet' => $datatablet]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('datatablet')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/datatablet');
    }

    public function delete($id)
    {
        DB::table('datatablet')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/datatablet');
    }
}