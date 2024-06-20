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
use App\Http\Controllers\DepartmentController;
use App\Models\Karyawan;

//cetak pdf
Route::get('/generate-pdf', [KaryawanController::class, 'cetak_pdf'])->name('user.karyawan_pdf');

//pengajuan cuti user

//bagian Superadmin

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
    Route::get('/karyawan', [KaryawanController::class, 'index1'])->name('karyawan');
    Route::post('/tambah-karyawan', [KaryawanController::class, 'store'])->name('karyawan.store');  
    Route::post('/karyawan', [KaryawanController::class, 'search'])->name('karyawan.search');  
    Route::post('/tambah-departement', [DepartmentController::class, 'store'])->name('departement.store'); 
    Route::put('/karyawan/{id}', [KaryawanController::class, 'update'])->name('karyawan.update'); 
    Route::delete('/karyawan/{id}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');
    Route::get('/departement', [DepartmentController::class, 'index'])->name('superadmin.departement');
    Route::get('/dataadmin', [SuperadminController::class, 'dataadmin']);
    Route::delete('/departement/{id}', [DepartmentController::class, 'destroy'])->name('departement.destroy');
    Route::put('/departement/{id}', [DepartmentController::class, 'update'])->name('departement.update');
   
    
});

// untuk admin
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/datacuti', [DataController::class, 'index'])->name('datacuti');
    Route::get('/datacuti/search', [DataController::class, 'index3'])->name('datacuti.search');
    Route::get('/datakaryawan', [AdminController::class, 'index3'])->name('datakaryawan.admin');
    Route::get('/datakaryawan/search', [AdminController::class,'search1'])->name('datakaryawan.search');  
    Route::get('/events', [CutiController::class, 'getEvents']);
   
});
// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
    Route::get('/user  ', [UserController::class, 'index']);
    Route::get('/datakaryawan/{id}', [KaryawanController::class, 'edit'])->name('user.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('/pengajuan  ', [UserController::class, 'pengajuan']);
    Route::post('/tambah-pengajuan', [CutiController::class, 'store'])->name('cuti.store');
    Route::get('/historyrecord', [DataController::class, 'index1'])->name('/historyrecord');
    Route::post('/cuti/search', [DataController::class, 'index2'])->name('cuti.search');
});


route:: get('/surat', function (){
    return view ('surat');

}); 




