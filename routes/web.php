<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\laptopController;
use App\Http\Controllers\earphoneController;
use App\Http\Controllers\tabletController;
use App\Http\Controllers\flashdiskController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\cameraController;
use App\Http\Controllers\handphoneController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\LanController;
use App\Http\Controllers\hdmiController;
use App\Http\Controllers\projectorController;
use App\Http\Controllers\hardiskController;
use App\Http\Controllers\informationController;
use App\Http\Controllers\pinjamController;
use Illuminate\Support\Facades\Route;

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

Route::get('/team', function () {
    return view('team');
});

Route::middleware(['auth'])->group(function () {
    Route::get('user/profile', [UserController::class, 'edit'])->name('user.edit-profile');
    Route::put('user/profile', [UserController::class, 'update'])->name('user.update-profile');

    Route::get('/profile', function () {
        return view('profile.index');
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

//CRUD INFORMATION Admin
//create
//form information
Route::get('/information/create', [informationController::class, 'create']);
//kirim data ke database
Route::post('/information', [informationController::class, 'store']);
//Read
//menampilkan semua data
Route::get('/information', [informationController::class, 'index']);
Route::get('/information/{information_id}', [informationController::class, 'show']);
//update
// form update
Route::get('/information/{information_id}/edit', [informationController::class, 'edit']);
Route::put('/information/{information_id}', [informationController::class, 'update']);
// delete
Route::delete('/information/{information_id}', [informationController::class, 'destroy']);

//Return Device
Route::get('/returndevice', function () {
    return view('returndevice');
});
// return-laptop
Route::get('/return-laptop', [laptopController::class, 'laptop']);
Route::post('/return-laptop/store', [laptopController::class, 'laptopstr']);
// return-headphone
Route::get('/return-headphone', [earphoneController::class, 'earphone']);
Route::post('/return-headphone/store', [earphoneController::class, 'earphonestr']);
// return-tablet
Route::get('/return-tablet', [tabletController::class, 'tablet']);
Route::post('/return-tablet/store', [tabletController::class, 'tabletstr']);
// return-flashdisk
Route::get('/return-flasdisk', [flashdiskController::class, 'flasdisk']);
Route::post('/return-flasdisk/store', [flashdiskController::class, 'flasdiskstr']);
// return-printer
Route::get('/return-printer', [printerController::class, 'printer']);
Route::post('/return-printer/store', [printerController::class, 'printerstr']);
// return-camera
Route::get('/return-camera', [cameraController::class, 'camera']);
Route::post('/return-camera/sotore', [cameraController::class, 'camerastr']);
// return-hp
Route::get('/return-hp', [handphoneController::class, 'handphone']);
Route::post('/return-hp/store', [handphoneController::class, 'handphonestr']);
// return-pc
Route::get('/return-computer', [PcController::class, 'computer']);
Route::post('/return-computer/store', [PcController::class, 'computerstr']);
// return-lan
Route::get('/return-lan', [LanController::class, 'lan']);
Route::post('/return-lan/store', [LanController::class, 'lanstr']);
// return-hdmi
Route::get('/return-HDMI', [hdmiController::class, 'HDMI']);
Route::post('/return-HDMI/store', [hdmiController::class, 'HDMIstr']);
// return-projector
Route::get('/return-projector', [projectorController::class, 'projector']);
Route::post('/return-projector/store', [projectorController::class, 'projectorstr']);
// return-hardisk
Route::get('/return-hardisk', [hardiskController::class, 'hardisk']);
Route::post('/return-hardisk/store', [hardiskController::class, 'hardiskstr']);

//Borrow Electronic
Route::get('/electronic', function () {
    return view('electronic');
});
// pinjam-laptop
Route::get('/select-laptop', [pinjamController::class, 'laptop']);
Route::post('/select-laptop/store', [pinjamController::class, 'laptopstr']);
//pinjam-earphone
Route::get('/select-headphone', [pinjamController::class, 'headset']);
Route::post('/select-headphone/store', [pinjamController::class, 'headsetstr']);
//pinjam-projector
Route::get('/select-projector', [pinjamController::class, 'projector']);
Route::post('/select-projector/store', [pinjamController::class, 'projectorstr']);
//pinjam-tablet
Route::get('/select-tablet', [pinjamController::class, 'tablet']);
Route::post('/select-tablet/store', [pinjamController::class, 'tabletstr']);
//pinjam-camera
Route::get('/select-camera', [pinjamController::class, 'camera']);
Route::post('/select-camera/store', [pinjamController::class, 'camerastr']);
//pinjam-handphone
Route::get('/select-handphone', [pinjamController::class, 'handphone']);
Route::post('/select-handphone/store', [pinjamController::class, 'handphonestr']);
//pinjam-handphone
Route::get('/select-komputer', [pinjamController::class, 'komputer']);
Route::post('/select-komputer/store', [pinjamController::class, 'komputerstr']);
//pinjam-flashdisk
Route::get('/select-flashdisk', [pinjamController::class, 'flashdisk']);
Route::post('/select-flashdisk/store', [pinjamController::class, 'flashdiskstr']);
//pinjam-hardisk
Route::get('/select-hardisk', [pinjamController::class, 'hardisk']);
Route::post('/select-hardisk/store', [pinjamController::class, 'hardiskstr']);

Auth::routes();
