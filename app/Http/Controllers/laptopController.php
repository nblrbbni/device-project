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
        $datalaptop = DB::table('datalaptop')->get();

        return view('laptop.return-laptop', [
            'datalaptop' => $datalaptop,
        ]);
    }

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

        DB::table('datalaptop')
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
        return view('laptop.create');
    }

    public function index()
    {
        $datalaptop = DB::table('datalaptop')->get();

        return view('laptop.read', ['datalaptop' => $datalaptop]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('datalaptop')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/datalaptop');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datalaptop = DB::table('datalaptop')->where('id', $id)->first();

        return view('laptop.update', ['datalaptop' => $datalaptop]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('datalaptop')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/datalaptop');
    }

    public function delete($id)
    {
        DB::table('datalaptop')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/datalaptop');
    }

    public function returnlap()
    {
        $laptop_penembalian = DB::table('laptop_penembalian')->get();

        return view('admin.data-pengembalian.data-laptop', ['laptop_penembalian' => $laptop_penembalian]);
    }
    public function deletelap($id)
    {
        DB::table('laptop_penembalian')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus!');
        return redirect('/return-laptop/show');
    }
}
