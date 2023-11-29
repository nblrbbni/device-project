<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        DB::table('guru')->insert([
            'nama' => $request['nama'],
        ]);

        return redirect('/guru');
    }

    public function index()
    {
        $guru = DB::table('guru')->get();

        return view('guru.read', ['guru' => $guru]);
    }

    public function edit($id)
    {
        $guru = DB::table('guru')->where('id', $id)->first();

        return view('guru.update', ['guru' => $guru]);
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

        return redirect('/guru');
    }
}
