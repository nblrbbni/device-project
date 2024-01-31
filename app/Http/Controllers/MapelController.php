<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class MapelController extends Controller
{
    public function create()
    {
        return view('mapel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mapel' => 'required',
        ]);

        DB::table('mapel')->insert([
            'mapel' => $request['mapel'],
        ]);

        return redirect('/mapel');
    }

    public function index()
    {
        $mapel = DB::table('mapel')->get();

        return view('mapel.read', ['mapel' => $mapel]);
    }

    public function edit($id)
    {
        $mapel = DB::table('mapel')->where('id', $id)->first();

        return view('mapel.update', ['mapel' => $mapel]);
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

        return redirect('/mapel');
    }
}
