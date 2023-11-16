<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function create(){
        return view("kategori.tambah");
    }

    public function kategori(Request $request){
        $request->validate([
            "nama"=>"required",
            "deskripsi"=>"required"
        ]);
        DB::table('kategori')->insert([
            "nama"=>$request["nama"],
            "deskripsi"=>$request["deskripsi"]
        ]);

        return redirect("/kategori");
    }

    public function data(){
        $kategori=DB::table('kategori')->get();
        dd($kategori);
        return view("kategori.tampil", ["kategori"=>$kategori]);
    }

    public function show($id){
        $kategori=DB::table('kategori')->where("id",$id)->first();
        return view("kategori.detail", ["kategori"=>$kategori]);
    }

    public function edit($id){
        $kategori=DB::table('kategori')->where("id",$id)->first();
        return view("kategori.edit", ["kategori"=>$kategori]);
    }

    public function update(Request $request, $id){
        $request->validate([
            "nama"=>"required",
            "deskripsi"=>"required"
        ]);

        DB::table('kategori')->where("id", $id)->update(["nama"=>$request->nama, "deskripsi"=>$request->deskripsi]);
        return redirect("/kategori");
    }

    public function destroy($id){
        DB::table('kategori')->where("id", $id)->delete();
        return redirect("/kategori");
    }
}
