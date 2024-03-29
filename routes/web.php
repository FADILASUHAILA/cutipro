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

//bagian User
Route::get('/beranda',function(){
    return view('dashboard');
});

//historyuser
Route::get('/historyrecord',function(){
    return view('user/recorduser');
});

//pengajuan cuti user
Route::get('/pengajuan',function(){
    return view('user/pengajuan');
});

Route::get('/profile',function(){
    return view('user/profile');
});


Route::get('/tes',function(){
    return view('tes');
});


Route::get('/sidebar',function(){
    return view('sidebar');
});




//bagian Superadmin
Route::get('/aproval',function(){
    return view('superadmin/aproval');
});

Route::get('/karyawan',function(){
    return view('superadmin/karyawan');
});

Route::get('/recordkaryawan',function(){
    return view('superadmin/recordkaryawan');
});

Route::post('/tambah-pengajuan', [CutiController::class, 'store'])->name('cuti.store');



Route::get('/karyawan', [KaryawanController::class, 'index1'])->name('/karyawan');

Route::get('/datakaryawan', [KaryawanController::class, 'index2'])->name('/datakaryawan');

Route::get('/datacuti', [DataController::class, 'index'])->name('/datacuti');
Route::get('/historyrecord', [DataController::class, 'index1'])->name('/historyrecord');

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
    Route::get('/user  ', [UserController::class, 'index']);
});



//profile
route:: get('/navbar', function (){
    return view ('navbar');

});


// route:: get('/datakaryawan', function (){
//     return view ('admin/datakaryawan');

// }); 

route:: get('/tes', function (){
    return view ('admin/tes');

}); 


// route:: get('/home', function (){
//     return view ('admin/home');

// }); 