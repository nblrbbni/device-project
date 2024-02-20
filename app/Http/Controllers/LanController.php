<?php

namespace App\Http\Controllers;

use App\Models\lan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LanController extends Controller
{
    public function lan()
    {
        $datalan = DB::table('datalan')->get();

        return view('Lan.return-lan', [
            'datalan' => $datalan,
        ]);
    }

    public function lanstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_LAN' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $lan = new lan;
        $lan->tanggal_peminjaman = $request->tanggal_peminjaman;
        $lan->nama = $request->nama;
        $lan->kode_device = $request->kode_device;
        $lan->kondisi_LAN = $request->kondisi_LAN;
        $lan->waktu_pengembalian = $request->waktu_pengembalian;
        $lan->save();

        DB::table('datalan')
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
        return view('admin.data-device.lan.index');
    }

    public function index()
    {
        $datalan = DB::table('datalan')->get();

        return view('admin.data-device.lan.index', ['datalan' => $datalan]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('datalan')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        return redirect('/data-lan');
    }

    public function edit($id)
    {
        $datalan = DB::table('datalan')->where('id', $id)->first();

        return view('admin.data-device.lan.update', ['datalan' => $datalan]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('datalan')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/data-lan');
    }

    public function delete($id)
    {
        DB::table('datalan')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/data-lan');
    }
}
