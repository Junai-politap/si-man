<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Admin\PesertaDidikController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\Admin\DataCoverController;
use App\Http\Controllers\Admin\RegisterController;


Route::group(['middleware' => 'auth:admin'], function () {
   
});

Route::get('/', [AdminController::class, 'index']);

Route::resource('data-cover', DataCoverController::class);

Route::get('data-cover/{datacover}/cetak_pdf', [DataCoverController::class, 'cetak_pdf']);

Route::resource('kelas', KelasController::class);

Route::resource('peserta-didik', PesertaDidikController::class);

Route::resource('mapel', MapelController::class);


Route::resource('nilai', NilaiController::class);

Route::resource('register', RegisterController::class);
Route::get('register/{register}/cetak_pdf', [RegisterController::class, 'cetak_pdf']);