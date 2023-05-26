<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\SuperAdminController;
use App\Http\Controllers\Superadmin\AdminController;
use App\Http\Controllers\Superadmin\PegawaiController;
use App\Http\Controllers\Superadmin\PesertaDidikController;
use App\Http\Controllers\Superadmin\DataCoverController;
use App\Http\Controllers\Superadmin\KelasController;
use App\Http\Controllers\Superadmin\MapelController;
use App\Http\Controllers\Superadmin\RegisterController;
use App\Http\Controllers\Superadmin\NilaiKelas10GanjilController;

Route::prefix('/')->middleware('auth:super-admin')->group(function () {

    Route::get('/', [SuperAdminController::class, 'dashboard']);

    Route::resource('super-admin', SuperAdminController::class);
    
    Route::resource('admin', AdminController::class);
    
    Route::resource('pegawai', PegawaiController::class);
    
    Route::resource('peserta-didik', PesertaDidikController::class);
    
    Route::resource('data-cover', DataCoverController::class);
    
    Route::resource('kelas', KelasController::class);
    
    Route::resource('mapel', MapelController::class);
    
    Route::resource('nilai', NilaiKelas10GanjilController::class);  
    Route::get('nilai/{pesertadidik}/tambah-nilai-10-ganjil', [NilaiKelas10GanjilController::class, 'tambah_nilai10ganjil']);
    Route::post('nilai', [NilaiKelas10GanjilController::class, 'store']);
    Route::put('nilai/{pesertadidik}/tambah-nilai-10-ganjil', [NilaiKelas10GanjilController::class, 'update']);




    Route::get('nilai/{pesertadidik}/tambah-nilai-10-genap', [NilaiController::class, 'tambah-nilai-10-genap']);
    Route::get('nilai/{pesertadidik}/tambah-nilai-11-ganjil', [NilaiController::class, 'tambah-nilai-11-ganjil']);
    Route::get('nilai/{pesertadidik}/tambah-nilai-11-genap', [NilaiController::class, 'tambah-nilai-11-genap']);
    Route::get('nilai/{pesertadidik}/tambah-nilai-12-ganjil', [NilaiController::class, 'tambah-nilai-12-ganjil']);
    Route::get('nilai/{pesertadidik}/tambah-nilai-12-genap', [NilaiController::class, 'tambah-nilai-12-genap']);


    

    Route::resource('register', RegisterController::class);
    Route::get('register/{register}/cetak_pdf', [RegisterController::class, 'cetak_pdf']);
    
   
});

