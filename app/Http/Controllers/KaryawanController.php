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

    public function index3(Request $request)
{
    $no_peg = $request->no_peg;
    
    if ($no_peg) {
        $users = Karyawan::where('no_peg', $no_peg)->get();
    } else {
        $users = Karyawan::all();
    }

    return view('superadmin.karyawan', compact('users'));
}
    
    public function index2()
    {
        $users = Karyawan::with(['department', 'position', 'role'])->get();
        return view('admin.datakaryawan')->with('users', $users);
    }

    
}