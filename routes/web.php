<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GuruController,
    KelasController,
    MapelController,
    SiswaController,
    AuthController,
    DashboardController
};

Route::get('/', function () {
    return view('layout.app');
});

// Route Login dan Logout
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('login.postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::group(['middleware' => 'auth'], function(){
    // Route Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


    // Route Guru
    Route::get('/guru/data', [GuruController::class, 'data'])->name('guru.data');
    Route::resource('/guru', GuruController::class);


    // Route Kelas
    Route::get('/kelas/data', [KelasController::class, 'data'])->name('kelas.data');
    Route::resource('/kelas', KelasController::class);


    // Route Mapel
    Route::get('/mapel/data', [MapelController::class, 'data'])->name('mapel.data');
    Route::resource('/mapel', MapelController::class);

    // Route Siswa
    Route::get('/siswa/data', [SiswaController::class, 'data'])->name('siswa.data');
    Route::resource('/siswa', SiswaController::class);
});