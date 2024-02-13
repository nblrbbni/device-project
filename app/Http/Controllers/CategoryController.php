<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.main.category.index');
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

        Alert::success('Berhasil!', 'Data berhasil ditambahkan!');
        return redirect('/categories');
    }

    public function index()
    {
        $category = DB::table('category')->get();

        return view('admin.main.category.index', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = DB::table('category')->where('id', $id)->first();

        return view('admin.main.category.update', ['category' => $category]);
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
        return redirect('/categories');
    }

    public function delete($id)
    {
        DB::table('category')->where('id', $id)->delete();

        Alert::success('Berhasil!', 'Data berhasil dihapus!');
        return redirect('/categories');
    }
}