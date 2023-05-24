<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pegawai\PegawaiController;
use App\Http\Controllers\Pegawai\PesertaDidikController;
use App\Http\Controllers\Pegawai\MapelController;
use App\Http\Controllers\Pegawai\DataCoverController;
use App\Http\Controllers\Pegawai\KelasController;
use App\Http\Controllers\Pegawai\NilaiController;


Route::group(['middleware' => 'auth:pegawai'], function () {

   
});

Route::get('/', [PegawaiController::class, 'index']);

Route::resource('data-cover', DataCoverController::class);

Route::get('datacover/{datacover}/cetak_pdf', [DataCoverController::class, 'cetak_pdf']);

Route::resource('kelas', KelasController::class);

Route::resource('mapel', MapelController::class);

Route::resource('nilai', NilaiController::class);

Route::resource('peserta-didik', PesertaDidikController::class);