<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DataController;
use App\Models\Karyawan;
use App\Model\ProfileController;


//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});

// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
    Route::get('/karyawan', [KaryawanController::class, 'index1'])->name('/karyawan');
});

// untuk admin
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/datacuti', [DataController::class, 'index'])->name('/datacuti');
    Route::post('/cuti/search', [DataController::class, 'index2'])->name('cuti.search');
    Route::get('/datakaryawan', [AdminController::class, 'datakaryawan']);
    Route::post('/karyawan/search', [KaryawanController::class, 'index3'])->name('karyawan.search');
    
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
    Route::get('/user  ', [UserController::class, 'index']);
    Route::get('/pengajuan  ', [UserController::class, 'pengajuan']);
    Route::post('/tambah-pengajuan', [CutiController::class, 'store'])->name('cuti.store');
    Route::get('/datacuti', [DataController::class, 'index'])->name('/datacuti');
    Route::get('/historyrecord', [DataController::class, 'index1'])->name('/historyrecord');
    Route::post('/cuti/search', [DataController::class, 'index2'])->name('cuti.search');
});


