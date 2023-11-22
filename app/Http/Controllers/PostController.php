<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('laptop.return-laptop');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_peminjaman' => 'required',
            'nama'=> 'required',
            'kondisi_mouse'=> 'required',
            'kondisi_laptop'=> 'required',
            'kondisi_keybohard'=> 'required',
            'waktu_pengembalian'=> 'required',
            
        ]);
        $data = [
            'tanggal_peminjaman' => $request->tanggal,
            'nama' => $request->nama,
            'kondisi_mouse' => $request->kondisi_mouse,
            'kondisi_laptop' => $request->kondisi_laptop,
            'kondisi_keybohard' => $request->kondisi_keybohard,
            'waktu_pengembalian' => $request->waktu_pengembalian,
        ];
        post::create($data);
        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
