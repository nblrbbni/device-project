<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategoriController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/electronic', function () {
    return view('electronic');
});

Route::get('/sp-electronic', function () {
    return view('sp-electronic');
});

Route::get('/notification', function () {
    return view('notification');
});

//Laptop
Route::get('/sp-laptop', function () {
    return view('laptop.sp-laptop');
});

//Flashdisk
Route::get('/sp-flashdisk', function () {
    return view('flashdisk.sp-flashdisk');
});

//Projector
Route::get('/sp-projector', function () {
    return view('projector.sp-projector');
});

//Printer
Route::get('/sp-printer', function () {
    return view('printer.sp-printer');
});

//Handphone
Route::get('/sp-handphone', function () {
    return view('handphone.sp-handphone');
});

//Tablet
Route::get('/sp-tablet', function () {
    return view('tablet.sp-tablet');
});

//Headphone
Route::get('/sp-headset', function () {
    return view('headphone.sp-headphone');
});

//HDMI
Route::get('/sp-hdmi', function () {
    return view('hdmi.sp-hdmi');
});

//Camera
Route::get('/sp-camera', function () {
    return view('camera.sp-camera');
});

Auth::routes();

//CRUD KATEGORI

//Create
//Form tambah kategori
Route::get("/kategori/create", [kategoriController::class, "create"]);
//Store data dari form ke database
Route::post("/kategori", [kategoriController::class, "kategori"]);

//Read
//Tampilkan semua data kategori
Route::get("/kategori", [kategoriController::class, "data"]);
//Detail kategori berdasarkan id
Route::get("/kategori/{kategori_id}",[kategoriController::class, "show"]);

//Update
//Form update kategori
Route::get("/kategori/{kategori_id}/edit",[kategoriController::class, "edit"]);
//Update data ke database berdasarkan id
Route::put("/kategori/{kategori_id}",[kategoriController::class, "update"]);

//Delete
//delete berdasarkan id
Route::delete("/kategori/{kategori_id}", [kategoriController::class, "destroy"]);


//CRUD Device
//Form tambah device
