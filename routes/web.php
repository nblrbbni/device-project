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

Route::get('/information', [informationController::class, 'show']);

Route::get('/team', function () {
    return view('team');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'user'])->name('user.dashboard');

    Route::get('/profile', function () {
        return view('profile.index');
    });

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
    Route::get('/return-flashdisk', [flashdiskController::class, 'flasdisk']);
    Route::post('/return-flashdisk/store', [flashdiskController::class, 'flasdiskstr']);
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

    // Report Tugas
    Route::get('/report-tugas/post', [ReportController::class, 'tugas']);
    Route::post('/report-tugas/store', [ReportController::class, 'tugasstr']);

    // Route::resource('profile', ProfileController::class)->only(['index','update']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');

    // Rute untuk menampilkan formulir pembaruan profil dan menangani pembaruan
    // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::PUT('/profile/update/', [ProfileController::class, 'update'])->name('profile.index')->middleware('auth');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    // Rute untuk dashboard admin
    Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin.dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    //CRUD Student
    Route::get('/student', [StudentController::class, 'index']);
    //Update
    Route::get('/student/{student_id}/edit', [StudentController::class, 'edit']);
    Route::put('/student/{student_id}', [StudentController::class, 'update']);
    //Delete
    Route::get('/student/{student_id}/delete', [StudentController::class, 'delete']);

    // Data Device
    Route::get('/data-device', [adminController::class, 'device']);
    // Data Laptop
    Route::get('/data-laptop/create', [laptopController::class, 'create']);
    Route::post('/data-laptop', [laptopController::class, 'store']);
    //Read
    Route::get('/data-laptop', [laptopController::class, 'index']);
    //Update
    Route::get('/data-laptop/{datalaptop_id}/edit', [laptopController::class, 'edit']);
    Route::put('/data-laptop/{datalaptop_id}', [laptopController::class, 'update']);
    //Delete
    Route::get('/data-laptop/{datalaptop_id}/delete', [laptopController::class, 'delete']);
    // Data Headphone
    Route::get('/data-headphone/create', [earphoneController::class, 'create']);
    Route::post('/data-headphone', [earphoneController::class, 'store']);
    //Read
    Route::get('/data-headphone', [earphoneController::class, 'index']);
    //Update
    Route::get('/data-headphone/{dataheadphone_id}/edit', [earphoneController::class, 'edit']);
    Route::put('/data-headphone/{dataheadphone_id}', [earphoneController::class, 'update']);
    //Delete
    Route::get('/data-headphone/{dataheadphone_id}/delete', [earphoneController::class, 'delete']);
    // Data Projector
    Route::get('/data-projector/create', [projectorController::class, 'create']);
    Route::post('/data-projector', [projectorController::class, 'store']);
    //Read
    Route::get('/data-projector', [projectorController::class, 'index']);
    //Update
    Route::get('/data-projector/{dataprojector_id}/edit', [projectorController::class, 'edit']);
    Route::put('/data-projector/{dataprojector_id}', [projectorController::class, 'update']);
    //Delete
    Route::get('/data-projector/{dataprojector_id}/delete', [projectorController::class, 'delete']);
    // Data Tablet
    Route::get('/data-tablet/create', [tabletController::class, 'create']);
    Route::post('/data-tablet', [tabletController::class, 'store']);
    //Read
    Route::get('/data-tablet', [tabletController::class, 'index']);
    //Update
    Route::get('/data-tablet/{datatablet_id}/edit', [tabletController::class, 'edit']);
    Route::put('/data-tablet/{datatablet_id}', [tabletController::class, 'update']);
    //Delete
    Route::get('/data-tablet/{datatablet_id}/delete', [tabletController::class, 'delete']);
    // Data Camera
    Route::get('/data-camera/create', [cameraController::class, 'create']);
    Route::post('/data-camera', [cameraController::class, 'store']);
    //Read
    Route::get('/data-camera', [cameraController::class, 'index']);
    //Update
    Route::get('/data-camera/{datacamera_id}/edit', [cameraController::class, 'edit']);
    Route::put('/data-camera/{datacamera_id}', [cameraController::class, 'update']);
    //Delete
    Route::get('/data-camera/{datacamera_id}/delete', [cameraController::class, 'delete']);
    // Data Handphone
    Route::get('/data-handphone/create', [handphoneController::class, 'create']);
    Route::post('/data-handphone', [handphoneController::class, 'store']);
    //Read
    Route::get('/data-handphone', [handphoneController::class, 'index']);
    //Update
    Route::get('/data-handphone/{datahandphone_id}/edit', [handphoneController::class, 'edit']);
    Route::put('/data-handphone/{datahandphone_id}', [handphoneController::class, 'update']);
    //Delete
    Route::get('/data-handphone/{datahandphone_id}/delete', [handphoneController::class, 'delete']);
    // Data Computer
    Route::get('/data-computer/create', [PcController::class, 'create']);
    Route::post('/data-computer', [PcController::class, 'store']);
    //Read
    Route::get('/data-computer', [PcController::class, 'index']);
    //Update
    Route::get('/data-computer/{datacomputer_id}/edit', [PcController::class, 'edit']);
    Route::put('/data-computer/{datacomputer_id}', [PcController::class, 'update']);
    //Delete
    Route::get('/data-computer/{datacomputer_id}/delete', [PcController::class, 'delete']);
    // Data Flashdisk
    Route::get('/data-flashdisk/create', [flashdiskController::class, 'create']);
    Route::post('/data-flashdisk', [flashdiskController::class, 'store']);
    //Read
    Route::get('/data-flashdisk', [flashdiskController::class, 'index']);
    //Update
    Route::get('/data-flashdisk/{dataflashdisk_id}/edit', [flashdiskController::class, 'edit']);
    Route::put('/data-flashdisk/{dataflashdisk_id}', [flashdiskController::class, 'update']);
    //Delete
    Route::get('/data-flashdisk/{dataflashdisk_id}/delete', [flashdiskController::class, 'delete']);
    // Data Hardisk
    Route::get('/data-hardisk/create', [hardiskController::class, 'create']);
    Route::post('/data-hardisk', [hardiskController::class, 'store']);
    //Read
    Route::get('/data-hardisk', [hardiskController::class, 'index']);
    //Update
    Route::get('/data-hardisk/{datahardisk_id}/edit', [hardiskController::class, 'edit']);
    Route::put('/data-hardisk/{datahardisk_id}', [hardiskController::class, 'update']);
    //Delete
    Route::get('/data-hardisk/{datahardisk_id}/delete', [hardiskController::class, 'delete']);
    // Data Printer
    Route::get('/data-printer/create', [printerController::class, 'create']);
    Route::post('/data-printer', [printerController::class, 'store']);
    //Read
    Route::get('/data-printer', [printerController::class, 'index']);
    //Update
    Route::get('/data-printer/{dataprinter_id}/edit', [printerController::class, 'edit']);
    Route::put('/data-printer/{dataprinter_id}', [printerController::class, 'update']);
    //Delete
    Route::get('/data-printer/{dataprinter_id}/delete', [printerController::class, 'delete']);
    // Data LAN
    Route::get('/data-lan/create', [LanController::class, 'create']);
    Route::post('/data-lan', [LanController::class, 'store']);
    //Read
    Route::get('/data-lan', [LanController::class, 'index']);
    //Update
    Route::get('/data-lan/{datalan_id}/edit', [LanController::class, 'edit']);
    Route::put('/data-lan/{datalan_id}', [LanController::class, 'update']);
    //Delete
    Route::get('/data-lan/{datalan_id}/delete', [LanController::class, 'delete']);
    // Data HDMI
    Route::get('/data-hdmi/create', [hdmiController::class, 'create']);
    Route::post('/data-hdmi', [hdmiController::class, 'store']);
    //Read
    Route::get('/data-hdmi', [hdmiController::class, 'index']);
    //Update
    Route::get('/data-hdmi/{datahdmi_id}/edit', [hdmiController::class, 'edit']);
    Route::put('/data-hdmi/{datahdmi_id}', [hdmiController::class, 'update']);
    //Delete
    Route::get('/data-hdmi/{datahdmi_id}/delete', [hdmiController::class, 'delete']);

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
    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'store']);
    //Read
    Route::get('/categories', [CategoryController::class, 'index']);
    //Update
    Route::get('/categories/{categories_id}/edit', [CategoryController::class, 'edit']);
    Route::put('/categories/{categories_id}', [CategoryController::class, 'update']);
    //Delete
    Route::get('/categories/{categories_id}/delete', [CategoryController::class, 'delete']);

    //CRUD INFORMATION Admin
    //Create
    Route::get('/information/create', [informationController::class, 'create']);
    Route::post('/information', [informationController::class, 'store']);
    // Read
    Route::get('/information/show', [informationController::class, 'index']);
    // Update
    // form update
    Route::get('/information/{information_id}/edit', [informationController::class, 'edit']);
    Route::put('/information/{information_id}', [informationController::class, 'update']);
    // delete
    Route::get('/information/{information_id}/delete', [informationController::class, 'delete']);

    // Pengembalian Device
    Route::get('/returndevice/show', [adminController::class, 'Devicert']);
    Route::get('/return-laptop/show', [laptopController::class, 'returnlap']);
    Route::get('/return-laptop/{return_laptop_id}/delete', [laptopController::class, 'deletelap']);
    Route::get('/return-headphone/show', [earphoneController::class, 'returnhead']);
    Route::get('/return-headphone/{return_headphone_id}/delete', [earphoneController::class, 'deletehead']);
    Route::get('/return-tablet/show', [tabletController::class, 'returntab']);
    Route::get('/return-tablet/{tablet}/delete', [tabletController::class, 'deletetab']);
    Route::get('/return-flashdisk/show', [flashdiskController::class, 'returnflash']);
    Route::get('/return-flashdisk/{flasdisk}/delete', [flashdiskController::class, 'deleteflash']);
    Route::get('/return-printer/show', [printerController::class, 'returnprint']);
    Route::get('/return-printer/{printer}/delete', [printerController::class, 'deleteprint']);
    Route::get('/return-camera/show', [cameraController::class, 'returncam']);
    Route::get('/return-camera/{camera}/delete', [cameraController::class, 'deletecam']);
    Route::get('/return-hp/show', [handphoneController::class, 'returnhp']);
    Route::get('/return-hp/{hp}/delete', [handphoneController::class, 'deletehp']);
    Route::get('/return-computer/show', [PcController::class, 'returnpc']);
    Route::get('/return-computer/{computer}/delete', [PcController::class, 'deletepc']);
    Route::get('/return-HDMI/show', [hdmiController::class, 'returnhdmi']);
    Route::get('/return-HDMI/{HDMI}/delete', [hdmiController::class, 'deletehdmi']);
    Route::get('/return-projector/show', [projectorController::class, 'returnprj']);
    Route::get('/return-projector/{projector}/delete', [projectorController::class, 'deleteprj']);
    Route::get('/return-hardisk/show', [hardiskController::class, 'returnhard']);
    Route::get('/return-hardisk/{hardisk}/delete', [hardiskController::class, 'deletehard']);
    Route::get('/return-lan/show', [LanController::class, 'returnlan']);
    Route::get('/return-lan/{lan}/delete', [LanController::class, 'deletelan']);

    // Data Peminjaman
    // Laptop
    Route::get('/peminjaman/show', [adminController::class, 'peminjaman']);
    Route::get('/peminjaman-laptop', [pinjamController::class, 'pinjamlaptop']);
    Route::get('/peminjaman-laptop/{peminjaman_laptop_id}/delete', [pinjamController::class, 'deletelap']);
    // Headphone
    Route::get('/peminjaman-headphone', [pinjamController::class, 'pinjamheadphone']);
    Route::get('/peminjaman-headphone/{peminjaman_headphone_id}/delete', [pinjamController::class, 'deletehead']);
    // Tablet
    Route::get('/peminjaman-tablet', [pinjamController::class, 'pinjamtablet']);
    Route::get('/peminjaman-tablet/{peminjaman_tablet_id}/delete', [pinjamController::class, 'deletetab']);
    // Computer
    Route::get('/peminjaman-computer', [pinjamController::class, 'pinjamcomputer']);
    Route::get('/peminjaman-computer/{peminjaman_computer_id}/delete', [pinjamController::class, 'deletecom']);
    // Handphone
    Route::get('/peminjaman-handphone', [pinjamController::class, 'pinjamhandphone']);
    Route::get('/peminjaman-handphone/{peminjaman_handphone_id}/delete', [pinjamController::class, 'deletehand']);
    // Camera
    Route::get('/peminjaman-camera', [pinjamController::class, 'pinjamcamera']);
    Route::get('/peminjaman-camera/{peminjaman_camera_id}/delete', [pinjamController::class, 'deletecam']);
    // Flashdisk
    Route::get('/peminjaman-flashdisk', [pinjamController::class, 'pinjamflashdisk']);
    Route::get('/peminjaman-flashdisk/{peminjaman_flashdisk_id}/delete', [pinjamController::class, 'deleteflash']);
    // Hardisk
    Route::get('/peminjaman-hardisk', [pinjamController::class, 'pinjamhardisk']);
    Route::get('/peminjaman-hardisk/{peminjaman_hardisk_id}/delete', [pinjamController::class, 'deletehard']);
    // Printer
    Route::get('/peminjaman-printer', [pinjamController::class, 'pinjamprinter']);
    Route::get('/peminjaman-printer/{peminjaman_printer_id}/delete', [pinjamController::class, 'deleteprint']);
    // Lan
    Route::get('/peminjaman-lan', [pinjamController::class, 'pinjamlan']);
    Route::get('/peminjaman-lan/{peminjaman_lan_id}/delete', [pinjamController::class, 'deletelan']);
    // Hdmi
    Route::get('/peminjaman-hdmi', [pinjamController::class, 'pinjamhdmi']);
    Route::get('/peminjaman-hdmi/{peminjaman_hdmi_id}/delete', [pinjamController::class, 'deletehdmi']);
    // Projector
    Route::get('/peminjaman-projector', [pinjamController::class, 'pinjamprojector']);
    Route::get('/peminjaman-projector/{peminjaman_projector_id}/delete', [pinjamController::class, 'deleteproj']);

    // Report Tugas
    Route::get('/report-tugas', [ReportController::class, 'index']);
});

// Admin
Route::get('/admin', [adminController::class, 'admin']);
Route::get('/data-siswa', [adminController::class, 'siswa']);
Route::get('/laporan', [adminController::class, 'laporan']);
Route::get('/tugas', [adminController::class, 'tugas']);
Route::get('/calendar', [adminController::class, 'calendar']);
Route::get('/Form', [adminController::class, 'Form']);
// Route::get('/data-laptop', [adminController::class, 'laptop']);
// Route::get('/data-earphone', [adminController::class, 'earphone']);
// Route::get('/data-tablet', [adminController::class, 'tablet']);
// Route::get('/data-pc', [adminController::class, 'pc']);
// Route::get('/data-handphone', [adminController::class, 'handphone']);
// Route::get('/data-camera', [adminController::class, 'camera']);
// Route::get('/data-flashdisk', [adminController::class, 'flashdisk']);
// Route::get('/data-hardisk', [adminController::class, 'hardisk']);
// Route::get('/data-printer', [adminController::class, 'printer']);
// Route::get('/data-lan', [adminController::class, 'lan']);
// Route::get('/data-hdmi', [adminController::class, 'hdmi']);
// Route::get('/data-projector', [adminController::class, 'projector']);

Auth::routes();
