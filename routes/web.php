<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;
use App\Livewire\KaryawanIndex;
use App\Livewire\KaryawanCreate;
use App\Livewire\KaryawanEdit;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//  jika user belum login
// Route::group(['middleware' => 'guest'], function() {
//     Route::get('/', [AuthController::class, 'login'])->name('login');
//     Route::post('/', [AuthController::class, 'dologin']);

// });

// // untuk superadmin dan pegawai
// Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function() {
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::get('/redirect', [RedirectController::class, 'cek']);
// });

// // untuk superadmin
// Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
//     Route::get('/superadmin', [SuperadminController::class, 'index']);
// });

// // untuk admin
// Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
//     Route::get('/admin', [AdminController::class, 'index']);
    
// });

// // untuk pegawai
// Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
//     Route::get('/user  ', [UserController::class, 'index']);
// });

// Route::middleware(['auth', 'checkLevel:admin'])->group(function () {
//     Route::get('/' , App\Livewire\Karyawan\Index::class);

// });

Route::get('/' , KaryawanIndex::class)->name('karyawan-index');
Route::get('/create' , KaryawanCreate::class)->name('karyawan-create');
Route::get('/edit/{id}' , KaryawanEdit::class)->name('karyawan-edit');
