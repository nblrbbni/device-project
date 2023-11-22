    <?php

use App\Http\Controllers\cameraController;
use App\Http\Controllers\earphoneController;
use App\Http\Controllers\flashdiskController;
use App\Http\Controllers\handphoneController;
use App\Http\Controllers\hardiskController;
use App\Http\Controllers\hdmiController;
use App\Models\post;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\informationController;

=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\laptopController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\projectorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReturnDeviceControll;
use App\Http\Controllers\tabletController;
>>>>>>> development

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

<<<<<<< HEAD
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
=======
//pengembalian sistem
// crate
>>>>>>> development
