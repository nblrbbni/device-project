<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
        ]);

        DB::table('category')->insert([
            'kode_device' => $request['kode_device'],
            'nama' => $request['nama'],
        ]);

        return redirect('/category');
    }

    public function index()
    {
        $category = DB::table('category')->get();

        return view('category.read', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = DB::table('category')->where('id', $id)->first();

        return view('category.update', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_device' => 'required',
            'nama' => 'required',
        ]);

        DB::table('category')
        ->where('id', $id)
        ->update(
            [
                'kode_device' => $request->kode_device,
                'nama' => $request->nama,
            ],
        );
        Alert::success('Berhasil!', 'Data berhasil diupdate!');
        return redirect('/category');
    }

    public function delete($id)
    {
        DB::table('category')->where('id', $id)->delete();

        return redirect('/category');
    }
}
