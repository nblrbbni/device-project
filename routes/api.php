<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\deviceController
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/device", [deviceController::class, "allDevices"]);
Route::post("/device/create", [deviceController::class, "createDevices"]);
Route::put("/device/{deviceId}/update", [deviceController::class, "updateDevice"]);
Route::delete("/device/{deviceId}/delete", [deviceController::class, "deleteDevice"]);
