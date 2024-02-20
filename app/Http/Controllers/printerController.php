<?php

namespace App\Http\Controllers;

use App\Models\printer;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class printerController extends Controller
{
    public function printer()
    {
        $dataprinter = DB::table('dataprinter')->get();

        return view('printer.return-printer', [
            'dataprinter' => $dataprinter,
        ]);
    }

    public function printerstr(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama' => 'required',
            'kode_device' => 'required',
            'kondisi_printer' => 'required',
            'waktu_pengembalian' => 'required',
        ]);

        $printer = new printer;
        $printer->tanggal_peminjaman = $request->tanggal_peminjaman;
        $printer->nama = $request->nama;
        $printer->kode_device = $request->kode_device;
        $printer->kondisi_printer = $request->kondisi_printer;
        $printer->waktu_pengembalian = $request->waktu_pengembalian;
        $printer->save();


        DB::table('dataprinter')
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
        return view('admin.data-device.printer.index');
    }

    public function index()
    {
        $dataprinter = DB::table('dataprinter')->get();

        return view('admin.data-device.printer.index', ['dataprinter' => $dataprinter]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
            'status'
        ]);

        DB::table('dataprinter')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
            'merk' => $request['merk'],
            'status' => 'status',
        ]);

        Alert::success('Berhasil!', 'Perangkat Anda berhasil ditambahkan!');
        return redirect('/data-printer');
    }

    public function edit($id)
    {
        $dataprinter = DB::table('dataprinter')->where('id', $id)->first();

        return view('admin.data-device.printer.update', ['dataprinter' => $dataprinter]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
            'merk' => 'required',
        ]);

        DB::table('dataprinter')
        ->where('id', $id)
            ->update(
                [
                    'kode_device' => $request->kode_device,
                    'nama' => $request->nama,
                    'merk' => $request->merk,
                ],
            );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/data-printer');
    }

    public function delete($id)
    {
        DB::table('dataprinter')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Perangkat Anda berhasil dihapus!');
        return redirect('/data-printer');
    }

    public function returnprint()
    {
        $printer_penembalian = DB::table('printer_penembalian')->get();

        return view('admin.data-pengembalian.data-printer', ['printer_penembalian' => $printer_penembalian]);
    }
    public function deleteprint($id)
    {
        DB::table('printer_penembalian')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus!');
        return redirect('/return-printer/show');
    }
}
