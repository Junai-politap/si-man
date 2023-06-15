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
    Route::get('data-cover/{datacover}/cetak_pdf', [DataCoverController::class, 'cetak_pdf']);

    
    Route::resource('kelas', KelasController::class);
    Route::post('kelas/store-kelas', [KelasController::class, 'storeKelas']);
    
    Route::resource('mapel', MapelController::class);
    
    Route::resource('nilai', NilaiController::class);
    Route::get('nilai/{anggota}/nilai', [NilaiController::class, 'nilai']);
    Route::get('nilai/{anggota}/edit', [NilaiController::class, 'edit']);
    Route::put('nilai/{anggota}', [NilaiController::class, 'update']);
    Route::delete('nilai/{anggota}', [NilaiController::class, 'destroy']);

   
    Route::resource('register', RegisterController::class);
    Route::get('register/cetak_register.pdf', [RegisterController::class, 'cetak_pdf']);
    
   
});

