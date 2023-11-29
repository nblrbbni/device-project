<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    public function create()
    {
        return view('device.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('device')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        return redirect('/device');
    }

    public function index()
    {
        $device = DB::table('device')->get();

        return view('device.read', ['device' => $device]);
    }

    public function edit($id)
    {
        $device = DB::table('device')->where('id', $id)->first();

        return view('device.update', ['device' => $device]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('device')
        ->where('id', $id)
        ->update(
            [
                'kode_device' => $request->kode_device,
                'nama' => $request->nama,
                'merk' => $request->merk,
            ],
        );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/device');
    }

    public function delete($id)
    {
        DB::table('device')->where('id', $id)->delete();

        return redirect('/device');
    }
}
