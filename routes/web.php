<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/pengajuancuti', function () {
    return view('formpengajuancuti');
});


// routes/web.php

// routes/web.php

// Route::get('/karyawan/home', 'KaryawanController@karyawanHome')->name('karyawan.home');
// Route::get('/admin/home', 'AdminController@home')->name('admin.home');

// //Route::get('/karyawan/home', 'KaryawanController@beranda')->name('karyawan.home');

// // Route::post('/login', [KaryawanController::class, 'login'])->name('login');

Route::middleware(['auth', 'checkLevel:karyawan'])->group(function () {
    Route::get('/karyawan/home', [App\Http\Controllers\KaryawanController::class, 'login'])->name('karyawan.login');
});

// Auth::routes();

// Menggunakan auth::routes() untuk mendefinisikan rute otentikasi

// Route::post('/login', [KaryawanController::class, 'login'])->name('login');
// Route::get('/login', [KaryawanController::class, 'index'])->name('login');
// Route::get('/home', [KaryawanController::class, 'home'])->name('karyawan.home');

// Route::post('/logi', [KaryawanController::class, 'login']);
// Route::middleware(['auth', 'checkLevel:admin'])->group(function () {
// Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
// });
// Route::middleware(['auth', 'checkLevel:karyawan'])->group(function () {
//     Route::get('/karyawan', [KaryawanController::class, 'home'])->name('karyawan.home');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
