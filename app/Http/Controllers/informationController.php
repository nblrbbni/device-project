<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class informationController extends Controller
{
    public function create()
    {
        return view('admin.main.information.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasal' => 'required',
            'descripsi' => 'required',
        ]);

        DB::table('information')->insert([
            'nama_pasal' => $request['nama_pasal'],
            'descripsi' => $request['descripsi']
        ]);

        Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
        return redirect('/information/show');
    }

    public function index()
    {
        $information = DB::table('information')->get();

        return view('admin.main.information.index', ['information' =>   $information]);
    }

    public function show()
    {
        $information = DB::table('information')->get();

        return view('information', ['information' => $information]);
    }

    public function edit($id)
    {
        $information = DB::table('information')->where('id', $id)->first();

        return view('admin.main.information.update', ['information' => $information]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasal' => 'required',
            'descripsi' => 'required'
        ]);
        DB::table('information')
            ->where('id', $id)
            ->update(
                [
                    'nama_pasal' => $request->nama_pasal,
                    'descripsi' => $request->descripsi
                ]
            );

        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/information/show');
    }

    public function delete($id)
    {
        DB::table('information')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus!');
        return redirect('/information/show');
    }
}