<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;

class deviceController extends Controller
{
    public function allDevices(){
        $allDevices = Device::query()->get();
        return response()->json([
            "code"=>200,
            "message"=>"get data device success",
            "data"=>$allDevices
        ]);
    }

    public function createDevice(Request $request){
        $validator=Validator::make($request->all(),[
            "nama"=>"required"
        ]);

        if ($validator->fails()){
            return response()->json([
                "code"=>400,
                "data"=>$validator->messages()
            ],400);
        }

        Device::create([
            "nama"=>$request->nama_perangkat,
            "kondisi"=>$request->kondisi_perangkat,
            "stok"=>$request->stok,
            "device_id"=>$request->device_id
        ]);
        return response()->json([
            "code"=>201,
            "message"=>"add new device success"
        ],201);
    }

    public function updateDevice(Request $request, $deviceId){
        $findDevice = Device::find($deviceId);
        if (!$findDevice) {
            return response()->json([
                'code'=>404,
                'message'=>'not found device id',
                ], 404);
            }
            $findDevice->update([
                "nama"=>$request->nama_perangkat,
                "kondisi"=>$request->kondisi_perangkat,
                "stok"=>$request->stok,
                "device_id"=>$request->device_id
            ]);
        return response()->json([
            "code"=>201,
            "message"=>"add new edit" . $findDevice->nama_perangkat . $findDevice->kondisi_perangkat . $findDevice->stok . $findDevice->device_id . "success"
        ],201);
    }

    public function deleteDevice($deviceId){
        $findDevice=Device::find($deviceId);
        if(!$findDevice){
            return response()->json([
                'code'=>404,
                "message"=>"device Id not found"
            ]);
        }
        $findDevice->delete();
        return response()->json([
            "code"=>200,
            "message"=>"delete" . $findDevice->nama_perangkat . $findDevice->kondisi_perangkat . $findDevice->stok . $findDevice->device_id . "success"
        ],200);
    }
}
