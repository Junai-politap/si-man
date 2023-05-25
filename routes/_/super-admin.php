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
use App\Http\Controllers\Superadmin\NilaiController;

Route::prefix('/')->middleware('auth:super-admin')->group(function () {

    Route::get('/', [SuperAdminController::class, 'dashboard']);

    Route::resource('super-admin', SuperAdminController::class);
    
    Route::resource('admin', AdminController::class);
    
    Route::resource('pegawai', PegawaiController::class);
    
    Route::resource('peserta-didik', PesertaDidikController::class);
    
    Route::resource('data-cover', DataCoverController::class);
    
    Route::resource('kelas', KelasController::class);
    
    Route::resource('mapel', MapelController::class);
    
    Route::resource('nilai', NilaiController::class);
    Route::get('nilai/{pesertadidik}/tambah_nilai10ganjil', [NilaiController::class, 'tambah_nilai10ganjil']);
    Route::get('nilai/{pesertadidik}/tambah_nilai10genap', [NilaiController::class, 'tambah_nilai10genap']);
    Route::get('nilai/{pesertadidik}/tambah_nilai11ganjil', [NilaiController::class, 'tambah_nilai11ganjil']);
    Route::get('nilai/{pesertadidik}/tambah_nilai11genap', [NilaiController::class, 'tambah_nilai11genap']);
    Route::get('nilai/{pesertadidik}/tambah_nilai12ganjil', [NilaiController::class, 'tambah_nilai12ganjil']);
    Route::get('nilai/{pesertadidik}/tambah_nilai12genap', [NilaiController::class, 'tambah_nilai12genap']);


    Route::resource('register', RegisterController::class);
    Route::get('register/{register}/cetak_pdf', [RegisterController::class, 'cetak_pdf']);
    
   
});

