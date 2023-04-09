<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

//route untuk blog
Route::get('blog', [BlogController::class,'index'])->name('blog.index');
Route::get('blog/creat', [BlogController::class,'create'])->name('blog.create');
Route::PUT('blog/store', [BlogController::class,'store'])->name('blog.store');
