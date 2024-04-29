<?php

namespace App\Http\Controllers;
use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
        
    }

    public function pengajuan() {
        return view('user.pengajuan');
    }


}
