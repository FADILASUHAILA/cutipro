<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('/beranda',function(){
    return view('sidebar');
});

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

route:: get('/sidebars', function (){
    return view ('sidebars');

});
// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
});

// untuk admin
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/admin', [AdminController::class, 'index']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
    Route::get('/karyawan', [UserController::class, 'index']);
});

