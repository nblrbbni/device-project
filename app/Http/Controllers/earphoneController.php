<?php

namespace App\Http\Controllers;

use App\Models\earphone;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class earphoneController extends Controller
{
    public function earphone()
    {
        $dataheadphone = DB::table('dataheadphone')->get();

        return view('headphone.return-headphone', [
            'dataheadphone' => $dataheadphone,
        ]);
    }

    public function earphonestr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_earphone' => 'required',
            'kondisi_kardus' => 'required',
            'kondisi_suara' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $earphone = new earphone;
        $earphone->tanggal_peminjaman = $request->tanggal_peminjaman;
        $earphone->nama = $request->nama;
        $earphone->kode_device = $request->kode_device;
        $earphone->kondisi_earphone = $request->kondisi_earphone;
        $earphone->kondisi_kardus = $request->kondisi_kardus;
        $earphone->kondisi_suara = $request->kondisi_suara;
        $earphone->waktu_pengembalian = $request->waktu_pengembalian;
        $earphone->save();

        DB::table('dataheadphone')
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
        return view('headphone.create');
    }

    public function index()
    {
        $dataheadphone = DB::table('dataheadphone')->get();

        return view('headphone.read', ['dataheadphone' => $dataheadphone]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('dataheadphone')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/dataheadphone');
    }

    public function edit($id)
    {
        $dataheadphone = DB::table('dataheadphone')->where('id', $id)->first();

        return view('headphone.update', ['dataheadphone' => $dataheadphone]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('dataheadphone')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/dataheadphone');
    }

    public function delete($id)
    {
        DB::table('dataheadphone')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');    
        return redirect('/dataheadphone');
    }
}