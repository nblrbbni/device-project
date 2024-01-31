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
        $dataprojector = DB::table('dataprojector')->get();

        return view('projector.return-projector', [
            'dataprojector' => $dataprojector,
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

        DB::table('dataprojector')
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
        return view('projector.create');
    }

    public function index()
    {
        $dataprojector = DB::table('dataprojector')->get();

        return view('projector.read', ['dataprojector' => $dataprojector]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('dataprojector')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/dataprojector');
    }

    public function edit($id)
    {
        $dataprojector = DB::table('dataprojector')->where('id', $id)->first();

        return view('projector.update', ['dataprojector' => $dataprojector]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('dataprojector')
            ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/dataprojector');
    }

    public function delete($id)
    {
        DB::table('dataprojector')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/dataprojector');
    }
}