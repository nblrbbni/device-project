<?php

namespace App\Http\Controllers;

use App\Models\hardisk;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class hardiskController extends Controller
{
    public function hardisk()
    {
        $datahardisk = DB::table('datahardisk')->get();

        return view('hardisk.return-hardisk', [
            'datahardisk' => $datahardisk,
        ]);
    }

    public function hardiskstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_hardisk' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $hardisk = new hardisk;
        $hardisk->tanggal_peminjaman = $request->tanggal_peminjaman;
        $hardisk->nama = $request->nama;
        $hardisk->kode_device = $request->kode_device;
        $hardisk->kondisi_hardisk = $request->kondisi_hardisk;
        $hardisk->waktu_pengembalian = $request->waktu_pengembalian;
        $hardisk->save();

        DB::table('datahardisk')
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
        return view('admin.data-device.hardisk.index');
    }

    public function index()
    {
        $datahardisk = DB::table('datahardisk')->get();

        return view('admin.data-device.hardisk.index', ['datahardisk' => $datahardisk]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('datahardisk')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/data-hardisk');
    }

    public function edit($id)
    {
        $datahardisk = DB::table('datahardisk')->where('id', $id)->first();

        return view('admin.data-device.hardisk.update', ['datahardisk' => $datahardisk]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('datahardisk')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/data-hardisk');
    }

    public function delete($id)
    {
        DB::table('datahardisk')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/data-hardisk');
    }

    public function returnhard()
    {
        $hardisk_penembalian = DB::table('hardisk_penembalian')->get();

        return view('admin.data-pengembalian.data-hardisk', ['hardisk_penembalian' => $hardisk_penembalian]);
    }
    public function deletehard($id)
    {
        DB::table('hardisk_penembalian')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus!');
        return redirect('/return-hardisk/show');
    }
}
