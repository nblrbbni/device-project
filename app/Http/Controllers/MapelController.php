<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class MapelController extends Controller
{
    public function create()
    {
        return view('admin.main.mapel.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel' => 'required',
        ]);

        DB::table('mapel')->insert([
            'mapel' => $request['mapel'],
        ]);

        Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
        return redirect('/mapel');
    }

    public function index()
    {
        $mapel = DB::table('mapel')->get();

        return view('admin.main.mapel.index', ['mapel' => $mapel]);
    }

    public function edit($id)
    {
        $mapel = DB::table('mapel')->where('id', $id)->first();

        return view('admin.main.mapel.update', ['mapel' => $mapel]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mapel' => 'required',
        ]);

        DB::table('mapel')
        ->where('id', $id)
        ->update(
            [
                'mapel' => $request->mapel,
            ],
        );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/mapel');
    }

    public function delete($id)
    {
        DB::table('mapel')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus!');
        return redirect('/mapel');
    }
}