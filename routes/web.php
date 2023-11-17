    <?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\laptopController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ReturnDeviceControll;

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
    return view('information
    ');
});

Route::middleware(['auth'])->group(function () {
});

Route::get('/electronic', function () {
    return view('electronic');
});

Route::get('/sp-electronic', function () {
    return view('sp-electronic');
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

// return device
Route::get('/returndevice', function () {
    return view('return-device.index');
});

// return-laptop
Route::get('/return-laptop', [laptopController::class, 'laptop']);
Route::get('/return-laptop/store', [laptopController::class, 'laptopstr']);

// return-hp
Route::get('/return-hp', function () {
    return view('handphone.retrurn-handphone');
});

// return-hdmi
Route::get('/return-HDMI', function () {
    return view('hdmi.return-hdmi');
});

// return-headphone
Route::get('/return-headphone', function () {
    return view('headphone.return-headphone');
});

// return-pc
Route::get('/return-computer', function () {
    return view('computer.return-pc');
});

// return-tablet
Route::get('/return-tablet', function () {
    return view('tablet.return-tablet');
});

// return-projector
Route::get('/return-projector', function () {
    return view('projector.return-projector');
});

// return-lan
Route::get('/return-lan', function () {
    return view('Lan.return-lan');
});

// return-flashdisk
Route::get('/return-flasdisk', function () {
    return view('flashdisk.return-flashdisk');
});

// return-printer
Route::get('/return-printer', function () {
    return view('printer.return-printer');
});

// return-camera
Route::get('/return-camera', function () {
    return view('camera.return-camera');
});

// return-hardisk
Route::get('/return-hardisk', function () {
    return view('hardisk.return-hardisk');
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

//Delet
Route::delete('/student/{student_id}', [StudentController::class, 'delete']);

//pengembalian sistem
// crate
