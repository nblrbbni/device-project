<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class deviceController extends Controller
{
    public function create(){
        return view("device.tambah");
    }

    public function kategori(Request $request){
        $request->validate([
            "nama"=>"required",
            "kondisi"=>"required",
            "stok"=>"required",

        ]);
        DB::table('kategori')->insert([
            "nama"=>$request["nama"],
            "kondisi"=>$request["kondisi"],
            "stok"=>$request["stok"]

        ]);

        return redirect("/device");
    }

    public function data(){
        $device=DB::table('device')->get();
        dd($device);
        return view("device.tampil", ["device"=>$device]);
    }

    public function show($id){
        $device=DB::table('device')->where("id",$id)->first();
        return view("device.detail", ["device"=>$device]);
    }

    public function edit($id){
        $device=DB::table('device')->where("id",$id)->first();
        return view("device.edit", ["device"=>$device]);
    }

    public function update(Request $request, $id){
        $request->validate([
            "nama"=>"required",
            "kondisi"=>"required",
            "stok"=>"required"
        ]);

        DB::table('kategori')->where("id", $id)->update(["nama"=>$request->nama, "kondisi"=>$request->kondisi, "stok"=>$request->stok]);
        return redirect("/device");
    }

    public function destroy($id){
        DB::table('device')->where("id", $id)->delete();
        return redirect("/device");
    }
}
