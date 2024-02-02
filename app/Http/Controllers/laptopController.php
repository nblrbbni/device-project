<?php

namespace App\Http\Controllers;

use App\Models\laptopreturn;
use RealRashid\SweetAlert\Facades\Alert;
// use Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class laptopController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function laptop()
    {
        $device = DB::table('device')->get();

        return view('laptop.return-laptop', [
            'device' => $device,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function laptopstr(Request $request)
    {
        // return view('laptop.return-laptop');

        $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_mouse' => 'required',
            'kondisi_laptop' => 'required',
            'kondisi_keybohard' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

 
        $laptopreturn = new laptopreturn;
        $laptopreturn->tanggal_peminjaman = $request->tanggal;
        $laptopreturn->nama = $request->nama;
        $laptopreturn->kode_device = $request->kode_device;
        $laptopreturn->kondisi_mouse = $request->kondisi_mouse;
        $laptopreturn->kondisi_laptop = $request->kondisi_laptop;
        $laptopreturn->kondisi_keybohard = $request->kondisi_keybohard;
        $laptopreturn->waktu_pengembalian = $request->waktu_pengembalian;
        $laptopreturn->save();

        DB::table('device')
        ->where('kode_device', $request->kode_device)
        ->update(
            [
                'status' => 'Tersedia',
            ],
        );

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dikembalikan!');
        return redirect()->to('/');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show()
    {
        $laptop_penembalian = DB::table('laptop_penembalian')->get();

        return view('laptop.read', ['laptop_penembalian' => $laptop_penembalian]);
    }
}