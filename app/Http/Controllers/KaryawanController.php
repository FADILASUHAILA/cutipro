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
    //menampilkan data karyawan di superadmin
    public function index1()
    {
        $users = Karyawan::with(['department', 'position', 'role'])->get();
        return view('superadmin.karyawan')->with('users', $users);
    }

    //Fitur search menampilkan data karyawan berdasarkan nopeg di superadmin
    public function search(Request $request)
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

    public function index4()
    {
        $users = Karyawan::with(['department', 'position', 'role'])->get();
        return view('user.index')->with('users', $users);
    } 

    public function edit($id)
    {
        $user = Karyawan::findOrFail($id);
        return view('user.beranda', compact('users'));
    }
    
    public function update(Request $request, $id)
    {
        $user = Karyawan::findOrFail($id);  
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role_id = $request->input('role_id');
        $user->position_id = $request->input('position_id');
        $user->no_peg = $request->input('no_peg');
        $user->department_id = $request->input('department_id');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->save();
    
        return redirect()->back()->with('success', 'Data anak berhasil disimpan.');
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