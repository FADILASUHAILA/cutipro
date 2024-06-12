<?php

namespace App\Http\Controllers;
use App\Models\Cuti;
use App\Models\Karyawan;
use App\Models\Departement;
use App\Models\User;
use App\Models\Position;
use App\Models\Role;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;


class KaryawanController extends Controller
{
    //menampilkan data karyawan di superadmin
    public function index1()
    {
    // Mengambil semua data user dengan relasi department, position, dan role
    $users = Karyawan::with(['department', 'position', 'role'])->get();
    // Mengambil semua data departemen
    $departments = Departement::all();
    $positions = Position::all(); 
    $roles = Role::all(); 

    // Mengirim data users dan departments ke view
    return view('superadmin.karyawan', compact('users', 'departments','positions','roles'));

}


    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required',
        'email' =>'required|email|unique:users,email',
        'password' => 'required|min:6',
        'role_id' =>'required',
        'position_id' => 'required',
        'no_peg' =>'required',
        'department_id' => 'required',
        'jml_cuti' => 'required',
      
    ]);
    $validatedData['password'] = bcrypt($validatedData['password']);
    // Simpan data anak ke database
    Karyawan::create($validatedData);
    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Post created successfully!');
    
    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back();
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
    $user = User::findOrFail($id);

    // Validasi request
    $request->validate([
        'name' => 'required',
        'email' =>'required',
        'password' => 'required',
        'role_id' =>'required',
        'position_id' => 'required',
        'no_peg' =>'required',
        'department_id' => 'required',
        'jml_cuti' => 'required',
    ]);

    // Update data karyawan
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }
    $user->no_peg = $request->no_peg;
    $user->role_id = $request->role_id;
    $user->position_id = $request->position_id;
    $user->department_id = $request->department_id;
    $user->jml_cuti = $request->jml_cuti;
    $user->save();

    return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
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