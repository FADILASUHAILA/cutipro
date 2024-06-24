<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Karyawan;
use App\Models\Position;
use App\Models\Departement;
use App\Models\Role;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $totalCuti = Cuti::count();
        return view('admin.index', ['totalCuti' => $totalCuti]);
    }

    public function showKaryawanByDepartment()
    {
        $user = Auth::user();

        $department = $user->department_id;
        $position = null;

        if ($user->role_id == '2') {
            $position = 3;
        }

        $query = Karyawan::where('department_id', $department);
        if ($position !== null) {
            $query->where('position_id', $position);
        }
        $karyawans = $query->get();

        $totalKaryawan = count($karyawans);
        $totalCuti = Cuti::count();
        $persentaseCuti = ($totalKaryawan > 0) ? ($totalCuti / $totalKaryawan) : 0;

        return view('admin.datakaryawan')
            ->with('karyawans', $karyawans)
            ->with('totalKaryawan', $totalKaryawan)
            ->with('totalCuti', $totalCuti)
            ->with('persentaseCuti', $persentaseCuti);
    }
    
// menampilkan data karyawan
    public function index3()
    {
        $users = Karyawan::with(['department', 'position', 'role'])->get();
            // Mengambil semua data departemen
    $departments = Departement::all();
    $positions = Position::all(); 
    $roles = Role::all(); 

    // Mengirim data users dan departments ke view

        $totalKaryawan = $users->count();

// Mengirimkan data karyawan dan total karyawan ke tampilan
    return view('admin.datakaryawan', [
        'users' => $users,
        'totalKaryawan' => $totalKaryawan,
        'departments' => $departments,
        'positions' => $positions,
        'roles' => $roles
    ]);
    }
    
    public function search1(Request $request)
    {
        $no_peg = $request->no_peg;
        
        if ($no_peg) {
            $users = Karyawan::where('no_peg', $no_peg)->get();
        } else {
            $users = Karyawan::all();
        }
        $totalKaryawan = $users->count();
    return view('admin.datakaryawan', [
        'users' => $users,
        'totalKaryawan' => $totalKaryawan
    ]);
    }

    //menampilkan data cuti di level admin
    public function index1()
    {
        $listcutis = Cuti::with(['department', 'position', 'role'])->get();
        return view('admin.datacuti')->with('listcutis', $listcutis);
    }

    public function index2()
    {
        $listcutis = Cuti::with(['department','position','role'])->get();
        $totalCuti = Cuti::sum('jml_cuti');
        return view('admin.home', compact('listcutis', 'totalCuti'));
    }
    


}
