<?php

namespace App\Http\Controllers;
use App\Models\Cuti;
use App\Models\Karyawan;
use App\Models\User;
use App\Models\listcutis;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


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

    public function getKaryawanByDepartmentId()
    {
        $userId = Auth::id();
        $departmentId = Auth::user()->department_id;

        $listKaryawan = Karyawan::where('id_user', $userId)
            ->where('department_id', $departmentId)
            ->with(['department', 'position', 'role'])
            ->get();

        return view('admin.datakaryawan')->with('users', $listKaryawan);
    }



}