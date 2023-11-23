<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class kategoriController extends Controller
{
    public function create(){
        return view("kategori.tambah");
    }

    public function kategori(Request $request){
        $request->validate([
            "nama_kategori"=>"required",
            "icon"=>"required"

        ]);
        DB::table('kategori')->insert([
            "nama_kategori"=>$request["nama_kategori"],
            "icon"=>$request["icon"]
        ]);

        return redirect("/kategori");


    }

    public function data(){
        $kategori=DB::table('kategori')->get();
        //dd($kategori);
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
            "nama_kategori"=>"required",
            "icon"=>"required"
        ]);

        DB::table('kategori')->where("id", $id)->update(["nama_kategori"=>$request->nama_kategori, "icon"=>$request->icon]);
        return redirect("/kategori");
    }

    public function destroy($id){
        DB::table('kategori')->where("id", $id)->delete();
        return redirect("/kategori");
    }
}
