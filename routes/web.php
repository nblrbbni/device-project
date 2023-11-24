    <?php

use App\Http\Controllers\cameraController;
use App\Http\Controllers\earphoneController;
use App\Http\Controllers\flashdiskController;
use App\Http\Controllers\handphoneController;
use App\Http\Controllers\hardiskController;
use App\Http\Controllers\hdmiController;
use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\laptopController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\pinjamController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\projectorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReturnDeviceControll;
use App\Http\Controllers\tabletController;

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

// Route::middleware(['auth'])->group(function () {
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

    

    //HDMI
    Route::get('/sp-hdmi', function () {
        return view('hdmi.sp-hdmi');
    });

    //Camera
    Route::get('/sp-camera', function () {
        return view('camera.sp-camera');
    });


// return device
Route::get('/returndevice', function () {
    return view('return-device.index');
});

// return-laptop
Route::get('/return-laptop', [laptopController::class, 'laptop']);
Route::post('/return-laptop/store', [laptopController::class, 'laptopstr']);

// return-hp
Route::get('/return-hp', [handphoneController::class, 'handphone']);
Route::post('/return-hp/store', [handphoneController::class, 'handphonestr']);


// return-hdmi
Route::get('/return-HDMI', [hdmiController::class, 'HDMI']);
Route::post('/return-HDMI/store', [hdmiController::class, 'HDMIstr']);


// return-headphone
Route::get('/return-headphone', [earphoneController::class, 'earphone']);
Route::post('/return-headphone/store', [earphoneController::class, 'earphonestr']);


// return-pc
Route::get('/return-computer', [PcController::class, 'computer']);
Route::post('/return-computer/store', [PcController::class, 'computerstr']);


// return-tablet
Route::get('/return-tablet', [tabletController::class, 'tablet']);
Route::post('/return-tablet/store', [tabletController::class, 'tabletstr']);


// return-projector
Route::get('/return-projector', [projectorController::class, 'projector']);
Route::post('/return-projector/store', [projectorController::class, 'projectorstr']);


// return-lan
Route::get('/return-lan', [LanController::class, 'lan']);
Route::post('/return-lan/store', [LanController::class, 'lanstr']);


// return-flashdisk
Route::get('/return-flasdisk', [flashdiskController::class, 'flasdisk']);
Route::post('/return-flasdisk/store', [flashdiskController::class, 'flasdiskstr']);


// return-printer
Route::get('/return-printer', [printerController::class, 'printer']);
Route::post('/return-printer/store', [printerController::class, 'printerstr']);


// return-camera
Route::get('/return-camera', [cameraController::class, 'camera']);
Route::post('/return-camera/sotore', [cameraController::class, 'camerastr']);


// return-hardisk
Route::get('/return-hardisk', [hardiskController::class, 'hardisk']);
Route::post('/return-hardisk/store', [hardiskController::class, 'hardiskstr']);



//CRUD Student
//Create
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);

//Read
Route::get('/student', [StudentController::class, 'index']);

//Update
Route::get('/student/{student_id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{student_id}', [StudentController::class, 'update']);

//Delet
Route::delete('/student/{student_id}', [StudentController::class, 'delete']);

// pinjam-laptop
Route::get('/sp-laptop', [pinjamController::class, 'laptop']);
Route::post('/sp-laptop/store', [pinjamController::class, 'laptopstr']);

//pinjam-earphone
Route::get('/sp-headset', [pinjamController::class, 'headset']);
Route::post('/sp-headset/store', [pinjamController::class, 'headsetstr']);

Route::get('/sp-projector', [pinjamController::class, 'projector']);
Route::post('/sp-projector/store', [pinjamController::class, 'projectorstr']);

Route::get('/sp-tablet', [pinjamController::class, 'tablet']);
Route::post('/sp-tablet/store', [pinjamController::class, 'tabletstr']);

Route::get('/sp-camera', [pinjamController::class, 'camera']);
Route::post('/sp-camera/store', [pinjamController::class, 'camerastr']);

Route::get('/sp-handphone', [pinjamController::class, 'handphone']);
Route::post('/sp-handphone/store', [pinjamController::class, 'handphonestr']);

Route::get('/sp-komputer', [pinjamController::class, 'komputer']);
Route::post('/sp-komputer/store', [pinjamController::class, 'komputerstr']);

Route::get('/sp-flashdisk', [pinjamController::class, 'flashdisk']);
Route::post('/sp-flashdisk/store', [pinjamController::class, 'flashdiskstr']);

Route::get('/sp-hardisk', [pinjamController::class, 'hardisk']);
Route::post('/sp-hardisk/store', [pinjamController::class, 'hardiskstr']);

Route::get('/sp-printer', [pinjamController::class, 'printer']);
Route::post('/sp-printer/store', [pinjamController::class, 'printerstr']);

Route::get('/sp-hdmi', [pinjamController::class, 'hdmi']);
Route::post('/sp-hdmi/store', [pinjamController::class, 'hdmistr']);

Route::get('/sp-lan', [pinjamController::class, 'lan']);
Route::post('/sp-lan/store', [pinjamController::class, 'lanstr']);