<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function create()
    {
        return view('admin.main.guru.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        DB::table('guru')->insert([
            'nama' => $request['nama'],
        ]);

        Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
        return redirect('/guru');
    }

    public function index()
    {
        $guru = DB::table('guru')->get();

        return view('admin.main.guru.index', ['guru' => $guru]);
    }

    public function edit($id)
    {
        $guru = DB::table('guru')->where('id', $id)->first();

        return view('admin.main.guru.update', ['guru' => $guru]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        DB::table('guru')
        ->where('id', $id)
        ->update(
            [
                'nama' => $request->nama,
            ],
        );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/guru');
    }

    public function delete($id)
    {
        DB::table('guru')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus!');
        return redirect('/guru');
    }
}
