<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class deviceController extends Controller
{
    public function created(){
        return view("device.tambah");
    }

    public function device(Request $request){
        $request->validate([
            "nama_perangkat"=>"required",
            "kondisi_perangkat"=>"required",
            "stok"=>"required",
            //"device_id"=>"required"

        ]);
        DB::table('device')->insert([
            "nama_perangkat"=>$request["nama_perangkat"],
            "kondisi_perangkat"=>$request["kondisi_perangkat"],
            "stok"=>$request["stok"],
            "device_id"=>$request["device_id"]

        ]);

        return redirect("/device");
    }

    public function datas(){
        $device=DB::table('device')->get();
        //dd($device);
        return view("device.tampil", ["device"=>$device]);
    }

    public function shows($id){
        $device=DB::table('device')->where("id",$id)->first();
        return view("device.detail", ["device"=>$device]);
    }

    public function edits($id){
        $device=DB::table('device')->where("id",$id)->first();
        return view("device.edit", ["device"=>$device]);
    }

    public function updated(Request $request, $id){
        $request->validate([
            "nama_perangkat"=>"required",
            "kondisi_perangkat"=>"required",
            "stok"=>"required",
            "device_id"=>"required"
        ]);

        DB::table('device')->where("id", $id)->update(["nama_perangkat"=>$request->nama_perangkat, "kondisi_perangkat"=>$request->kondisi_perangkat, "stok"=>$request->stok, "device_id"=>$request->device_id]);
        return redirect("/device");
    }

    public function deleted($id){
        DB::table('device')->where("id", $id)->delete();
        return redirect("/device");
    }
}
