<?php

namespace App\Http\Controllers;

use App\Models\handphone;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class handphoneController extends Controller
{
    public function handphone()
    {
        $datahandphone = DB::table('datahandphone')->get();

        return view('handphone.return-handphone', [
            'datahandphone' => $datahandphone,
        ]);
    }
    public function handphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_handphone' => 'required',
            'kondisi_baterai' => 'required',
            'kondisi_charger' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $handphone = new handphone;
        $handphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $handphone->nama = $request->nama;
        $handphone->kode_device = $request->kode_device;
        $handphone->kondisi_handphone = $request->kondisi_handphone;
        $handphone->kondisi_baterai = $request->kondisi_baterai;
        $handphone->kondisi_charger = $request->kondisi_charger;
        $handphone->waktu_pengembalian = $request->waktu_pengembalian;
        $handphone->save();

        DB::table('datahandphone')
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
        return view('handphone.create');
    }

    public function index()
    {
        $datahandphone = DB::table('datahandphone')->get();

        return view('handphone.read', ['datahandphone' => $datahandphone]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('datahandphone')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/datahandphone');
    }

    public function edit($id)
    {
        $datahandphone = DB::table('datahandphone')->where('id', $id)->first();

        return view('handphone.update', ['datahandphone' => $datahandphone]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('datahandphone')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/datahandphone');
    }

    public function delete($id)
    {
        DB::table('datahandphone')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/datahandphone');
    }
}