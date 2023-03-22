<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstitutionController;
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
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Nama Mahasiswa : $nama";    
});

Route::get('/portofolio', function () {
    return view('profile');    
});

Route::prefix('/mahasiswa')->group(function(){
    
    Route::get('/nama/{nama}', function ($nama) {
        return "Nama Mahasiswa : $nama";    
    });

    Route::get('/umur/{umur}', function ($umur) {
        return "umur Mahasiswa : $umur";    
    });

    Route::get('/alamat/{alamat}', function ($alamat) {
        return "alamat Mahasiswa : $alamat";    
    });
});

// route ke view
Route::get('/view-app', function () {
    return view('app');
});

// route ke controller 
Route::get('test/{kode}', [TestController::class,'index']);

//route untuk course
Route::get('course', [CourseController::class,'index'])->name('course.index');
Route::get('institution', [InstitutionController::class,'index'])->name('institution.index');
