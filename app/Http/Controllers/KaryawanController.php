<?php

namespace App\Http\Controllers;
use App\Models\Cuti;
use App\Models\Karyawan;
use App\Models\User;
use App\Models\listcutis;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

    

    public function cetak_pdf()
    {
        $karyawan = User::all();
        $id = Cuti::latest('updated_at')->value('id');
        $list_cuti = Cuti::findOrFail($id);



        $pdf = Pdf::loadview('user.karyawan_pdf', ['list_cuti' => $list_cuti])->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->download('laporan-karyawan.pdf');
    }


}