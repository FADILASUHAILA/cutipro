<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    
    public function index1()
    {
        $users = Karyawan::with(['department', 'position', 'role'])->get();
        return view('superadmin.karyawan')->with('users', $users);
    }
    public function index2()
    {
        $users = Karyawan::with(['department', 'position', 'role'])->get();
        return view('admin.datakaryawan')->with('users', $users);
    }

    
}