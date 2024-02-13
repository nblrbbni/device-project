<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PcController;
use App\Http\Controllers\LanController;
use App\Http\Controllers\dataPeminjaman;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\hdmiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\cameraController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\laptopController;
use App\Http\Controllers\pinjamController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\tabletController;
use App\Http\Controllers\hardiskController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\earphoneController;
use App\Http\Controllers\flashdiskController;
use App\Http\Controllers\handphoneController;
use App\Http\Controllers\projectorController;
use App\Http\Controllers\informationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\adminController;

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

Route::middleware(['auth', 'isAdmin'])->group(function () {
    // Rute untuk dashboard admin
    Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    // Rute untuk dashboard pengguna biasa
    Route::get('/dashboard', [UserController::class, 'user'])->name('user.dashboard');
});

Route::get('/team', function () {
    return view('team');
});

// Report Tugas
Route::get('/report-tugas', [ReportController::class, 'tugas']);
Route::post('/report-tugas/store', [ReportController::class, 'tugasstr']);
Route::get('/report-tugas/show', [ReportController::class, 'index']);

//CRUD Mapel
//Create
Route::get('/mapel/create', [MapelController::class, 'create']);
Route::post('/mapel', [MapelController::class, 'store']);
//Read
Route::get('/mapel', [MapelController::class, 'index']);
//Update
Route::get('/mapel/{mapel_id}/edit', [MapelController::class, 'edit']);
Route::put('/mapel/{mapel_id}', [MapelController::class, 'update']);
//Delete
Route::get('/mapel/{mapel_id}/delete', [MapelController::class, 'delete']);

//CRUD Guru
//Create
Route::get('/guru/create', [GuruController::class, 'create']);
Route::post('/guru', [GuruController::class, 'store']);
//Read
Route::get('/guru', [GuruController::class, 'index']);
//Update
Route::get('/guru/{guru_id}/edit', [GuruController::class, 'edit']);
Route::put('/guru/{guru_id}', [GuruController::class, 'update']);
//Delete
Route::get('/guru/{guru_id}/delete', [GuruController::class, 'delete']);

//CRUD Category
//Create
Route::get('/categories/create' , [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);
//Read
Route::get('/categories', [CategoryController::class, 'index']);
//Update
Route::get('/categories/{categories_id}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{categories_id}', [CategoryController::class, 'update']);
//Delete
Route::get('/categories/{categories_id}/delete', [CategoryController::class, 'delete']);

// Data Peminjaman
// Laptop
Route::get('/peminjaman-laptop', [pinjamController::class, 'pinjamlaptop']);
// Headphone
Route::get('/peminjaman-headphone', [pinjamController::class, 'pinjamheadphone']);
// Tablet
Route::get('/peminjaman-tablet', [pinjamController::class, 'pinjamtablet']);
// Computer
Route::get('/peminjaman-computer', [pinjamController::class, 'pinjamcomputer']);
// Handphone
Route::get('/peminjaman-handphone', [pinjamController::class, 'pinjamhandphone']);
// Camera
Route::get('/peminjaman-camera', [pinjamController::class, 'pinjamcamera']);
// Flashdisk
Route::get('/peminjaman-flashdisk', [pinjamController::class, 'pinjamflashdisk']);
// Hardisk
Route::get('/peminjaman-hardisk', [pinjamController::class, 'pinjamhardisk']);
// Printer
Route::get('/peminjaman-printer', [pinjamController::class, 'pinjamprinter']);
// Lan
Route::get('/peminjaman-lan', [pinjamController::class, 'pinjamlan']);
// Hdmi
Route::get('/peminjaman-hdmi', [pinjamController::class, 'pinjamhdmi']);
// Projector
Route::get('/peminjaman-projector', [pinjamController::class, 'pinjamprojector']);

Route::middleware(['auth'])->group(function () {
    Route::get('user/profile', [UserController::class, 'edit'])->name('user.edit-profile');
    Route::put('user/profile', [UserController::class, 'update'])->name('user.update-profile');

    Route::get('/profile', function () {
        return view('profile.index');
    });

    //CRUD Student
    //Create
    Route::get('/student/create', [StudentController::class, 'create']);
    Route::post('/student', [StudentController::class, 'store']);
    //Read
    Route::get('/student', [StudentController::class, 'index']);
    //Update
    Route::get('/student/{student_id}/edit', [StudentController::class, 'edit']);
    Route::put('/student/{student_id}', [StudentController::class, 'update']);
    //Delete
    Route::get('/student/{student_id}/delete', [StudentController::class, 'delete']);

    //Return Device
    Route::get('/returndevice', [ReturnController::class, 'showReturnForm']);
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
    //pinjam-printer
    Route::get('/select-printer', [pinjamController::class, 'printer']);
    Route::post('/select-printer/store', [pinjamController::class, 'printerstr']);
    //pinjam-lan
    Route::get('/select-lan', [pinjamController::class, 'lan']);
    Route::post('/select-lan/store', [pinjamController::class, 'lanstr']);
    //pinjam-hdmi
    Route::get('/select-hdmi', [pinjamController::class, 'hdmi']);
    Route::post('/select-hdmi/store', [pinjamController::class, 'hdmistr']);

    // Route::resource('profile', ProfileController::class)->only(['index','update']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');

    // Rute untuk menampilkan formulir pembaruan profil dan menangani pembaruan
    // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::PUT('/profile/update/', [ProfileController::class, 'update'])->name('profile.index')->middleware('auth');
});

//CRUD INFORMATION Admin
//Create
Route::get('/information/create', [informationController::class, 'create']);
Route::post('/information', [informationController::class, 'store']);
//Read
Route::get('/information', [informationController::class, 'index']);
Route::get('/information/{information_id}', [informationController::class, 'show']);
//update
// form update
Route::get('/information/{information_id}/edit', [informationController::class, 'edit']);
Route::put('/information/{information_id}', [informationController::class, 'update']);
// delete
Route::get('/information/{information_id}/delete', [informationController::class, 'delete']);

// Data Device
Route::get('/datadevice', function() {
    return view('data-device.read');
});
// Data Laptop
Route::get('/datalaptop/create', [laptopController::class, 'create']);
Route::post('/datalaptop', [laptopController::class, 'store']);
//Read
Route::get('/datalaptop', [laptopController::class, 'index']);
//Update
Route::get('/datalaptop/{datalaptop_id}/edit', [laptopController::class, 'edit']);
Route::put('/datalaptop/{datalaptop_id}', [laptopController::class, 'update']);
//Delete
Route::get('/datalaptop/{datalaptop_id}/delete', [laptopController::class, 'delete']);
// Data Headphone
Route::get('/dataheadphone/create', [earphoneController::class, 'create']);
Route::post('/dataheadphone', [earphoneController::class, 'store']);
//Read
Route::get('/dataheadphone', [earphoneController::class, 'index']);
//Update
Route::get('/dataheadphone/{dataheadphone_id}/edit', [earphoneController::class, 'edit']);
Route::put('/dataheadphone/{dataheadphone_id}', [earphoneController::class, 'update']);
//Delete
Route::get('/dataheadphone/{dataheadphone_id}/delete', [earphoneController::class, 'delete']);
// Data Projector
Route::get('/dataprojector/create', [projectorController::class, 'create']);
Route::post('/dataprojector', [projectorController::class, 'store']);
//Read
Route::get('/dataprojector', [projectorController::class, 'index']);
//Update
Route::get('/dataprojector/{dataprojector_id}/edit', [projectorController::class, 'edit']);
Route::put('/dataprojector/{dataprojector_id}', [projectorController::class, 'update']);
//Delete
Route::get('/dataprojector/{dataprojector_id}/delete', [projectorController::class, 'delete']);
// Data Tablet
Route::get('/datatablet/create', [tabletController::class, 'create']);
Route::post('/datatablet', [tabletController::class, 'store']);
//Read
Route::get('/datatablet', [tabletController::class, 'index']);
//Update
Route::get('/datatablet/{datatablet_id}/edit', [tabletController::class, 'edit']);
Route::put('/datatablet/{datatablet_id}', [tabletController::class, 'update']);
//Delete
Route::get('/datatablet/{datatablet_id}/delete', [tabletController::class, 'delete']);
// Data Camera
Route::get('/datacamera/create', [cameraController::class, 'create']);
Route::post('/datacamera', [cameraController::class, 'store']);
//Read
Route::get('/datacamera', [cameraController::class, 'index']);
//Update
Route::get('/datacamera/{datacamera_id}/edit', [cameraController::class, 'edit']);
Route::put('/datacamera/{datacamera_id}', [cameraController::class, 'update']);
//Delete
Route::get('/datacamera/{datacamera_id}/delete', [cameraController::class, 'delete']);
// Data Handphone
Route::get('/datahandphone/create', [handphoneController::class, 'create']);
Route::post('/datahandphone', [handphoneController::class, 'store']);
//Read
Route::get('/datahandphone', [handphoneController::class, 'index']);
//Update
Route::get('/datahandphone/{datahandphone_id}/edit', [handphoneController::class, 'edit']);
Route::put('/datahandphone/{datahandphone_id}', [handphoneController::class, 'update']);
//Delete
Route::get('/datahandphone/{datahandphone_id}/delete', [handphoneController::class, 'delete']);
// Data Computer
Route::get('/datacomputer/create', [PcController::class, 'create']);
Route::post('/datacomputer', [PcController::class, 'store']);
//Read
Route::get('/datacomputer', [PcController::class, 'index']);
//Update
Route::get('/datacomputer/{datacomputer_id}/edit', [PcController::class, 'edit']);
Route::put('/datacomputer/{datacomputer_id}', [PcController::class, 'update']);
//Delete
Route::get('/datacomputer/{datacomputer_id}/delete', [PcController::class, 'delete']);
// Data Flashdisk
Route::get('/dataflashdisk/create', [flashdiskController::class, 'create']);
Route::post('/dataflashdisk', [flashdiskController::class, 'store']);
//Read
Route::get('/dataflashdisk', [flashdiskController::class, 'index']);
//Update
Route::get('/dataflashdisk/{dataflashdisk_id}/edit', [flashdiskController::class, 'edit']);
Route::put('/dataflashdisk/{dataflashdisk_id}', [flashdiskController::class, 'update']);
//Delete
Route::get('/dataflashdisk/{dataflashdisk_id}/delete', [flashdiskController::class, 'delete']);
// Data Hardisk
Route::get('/datahardisk/create', [hardiskController::class, 'create']);
Route::post('/datahardisk', [hardiskController::class, 'store']);
//Read
Route::get('/datahardisk', [hardiskController::class, 'index']);
//Update
Route::get('/datahardisk/{datahardisk_id}/edit', [hardiskController::class, 'edit']);
Route::put('/datahardisk/{datahardisk_id}', [hardiskController::class, 'update']);
//Delete
Route::get('/datahardisk/{datahardisk_id}/delete', [hardiskController::class, 'delete']);
// Data Printer
Route::get('/dataprinter/create', [printerController::class, 'create']);
Route::post('/dataprinter', [printerController::class, 'store']);
//Read
Route::get('/dataprinter', [printerController::class, 'index']);
//Update
Route::get('/dataprinter/{dataprinter_id}/edit', [printerController::class, 'edit']);
Route::put('/dataprinter/{dataprinter_id}', [printerController::class, 'update']);
//Delete
Route::get('/dataprinter/{dataprinter_id}/delete', [printerController::class, 'delete']);
// Data LAN
Route::get('/datalan/create', [LanController::class, 'create']);
Route::post('/datalan', [LanController::class, 'store']);
//Read
Route::get('/datalan', [LanController::class, 'index']);
//Update
Route::get('/datalan/{datalan_id}/edit', [LanController::class, 'edit']);
Route::put('/datalan/{datalan_id}', [LanController::class, 'update']);
//Delete
Route::get('/datalan/{datalan_id}/delete', [LanController::class, 'delete']);
// Data HDMI
Route::get('/datahdmi/create', [hdmiController::class, 'create']);
Route::post('/datahdmi', [hdmiController::class, 'store']);
//Read
Route::get('/datahdmi', [hdmiController::class, 'index']);
//Update
Route::get('/datahdmi/{datahdmi_id}/edit', [hdmiController::class, 'edit']);
Route::put('/datahdmi/{datahdmi_id}', [hdmiController::class, 'update']);
//Delete
Route::get('/datahdmi/{datahdmi_id}/delete', [hdmiController::class, 'delete']);

// Admin
Route::get('/admin', [adminController::class, 'admin']);
Route::get('/data-siswa', [adminController::class, 'siswa']);
Route::get('/data-device', [adminController::class, 'device']);
Route::get('/laporan', [adminController::class, 'laporan']);
Route::get('/Device', [adminController::class, 'Devicert']);
Route::get('/tugas', [adminController::class, 'tugas']);
Route::get('/calendar', [adminController::class, 'calendar']);
Route::get('/Form', [adminController::class, 'Form']);
Route::get('/data-laptop', [adminController::class, 'laptop']);
Route::get('/data-earphone', [adminController::class, 'earphone']);
Route::get('/data-tablet', [adminController::class, 'tablet']);
Route::get('/data-pc', [adminController::class, 'pc']);
Route::get('/data-handphone', [adminController::class, 'handphone']);
Route::get('/data-camera', [adminController::class, 'camera']);
Route::get('/data-flashdisk', [adminController::class, 'flashdisk']);
Route::get('/data-hardisk', [adminController::class, 'hardisk']);
Route::get('/data-printer', [adminController::class, 'printer']);
Route::get('/data-lan', [adminController::class, 'lan']);
Route::get('/data-hdmi', [adminController::class, 'hdmi']);
Route::get('/data-projector', [adminController::class, 'projector']);

Auth::routes();