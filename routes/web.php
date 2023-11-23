<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Http\Controllers\deviceController;
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

Route::get('/information', function () {
    return view('information');
});

Route::get('/team', function () {
    return view('team');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/electronic', function () {
        return view('electronic');
    });

    Route::get('/returndevice', function () {
        return view('returndevice');
    });

    Route::get('/sp-electronic', function () {
        return view('sp-electronic');
    });

    //Laptop
    Route::get('/sp-laptop', function () {
        return view('laptop.sp-laptop');
    });

    Route::get('/return-laptop', function() {
        return view('laptop.return-laptop');
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
});

//CRUD Student
//Create
Route::get('/student/create' , [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);

//Read
Route::get('/student', [StudentController::class, 'index']);

//Update
Route::get('/student/{student_id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{student_id}', [StudentController::class, 'update']);

//Delete
Route::get('/student/{student_id}/delete', [StudentController::class, 'delete']);

Auth::routes();

//CRUD KATEGORI

//Create
//Form tambah kategori
Route::get("/kategori/form", [kategoriController::class, "create"]);
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
Route::get("/device/form", [deviceController::class, "created"]);
//Store data dari form ke database
Route::post("/device", [deviceController::class, "device"]);

//Read
//Tampilkan semua data device
Route::get("/device", [deviceController::class, "datas"]);
//Detail device berdasarkan id
Route::get("/device/{device_id}",[deviceController::class, "shows"]);

//Update
//Form update device
Route::get("/device/{device_id}/edit",[deviceController::class, "edits"]);
//Update data ke database berdasarkan id
Route::put("/device/{device_id}",[deviceController::class, "updated"]);

//Delete
//delete berdasarkan id
Route::delete("/device/{device_id}", [deviceController::class, "deleted"]);

