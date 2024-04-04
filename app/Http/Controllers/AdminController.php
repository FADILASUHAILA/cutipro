<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

// Ambil jumlah data cuti dari database
    $totalCuti = Cuti::count();

    // Kirim total cuti ke view
        return view('admin.index',['totalCuti' => $totalCuti]);
    }
// menampilkan data karyawan
    public function index3()
    {
        $users = Karyawan::with(['department', 'position', 'role'])->get();
        $totalKaryawan = $users->count();

// Mengirimkan data karyawan dan total karyawan ke tampilan
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
    $listcutis = Cuti::with(['department', 'position', 'role'])->get();
    $totalCuti = Cuti::sum('jml_cuti');
    return view('admin.home', compact('listcutis', 'totalCuti'));
}  



}
