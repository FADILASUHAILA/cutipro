<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Position;
use App\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    
    public function index()
    {
        $departements = Departement::all();
        $positions = Position::all();
        $roles = Role::all();
        $users = Karyawan::with(['departement', 'position', 'role'])->get();
        return view('superadmin.karyawan')->with('users', $users)
        ->with('departements', $departements)
        ->with('positions', $positions)
        ->with('roles', $roles);
    }
    public function index2()
    {
        $users = Karyawan::with(['departement', 'position', 'role'])->get();
        return view('admin.datakaryawan')->with('users', $users);
    }

    public function create(): View
    {
        return view('superadmin.karyawan');
    }

    public function store(Request $request): RedirectResponse
    {
        // untuk memeriksa apakah data yang dikirimkan dari form sesuai dengan yang Anda harapkan.
        // dd($request->all());

        // Validasi data yang dikirimkan dari formulir
        $request->validate([
            'no_peg' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'position_id' => 'required|exists:positions,id',
            'role_id' => 'required|exists:roles,id',
            'departement_id' => 'required|exists:departements,id',
            'password' => 'required|min:8',
        ]);

        // Hash password sebelum disimpan
        $hashedPassword = Hash::make($request->input('password'));

        // Simpan data pegawai ke dalam database
        Karyawan::create([
            'no_peg' => $request->input('no_peg'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'position_id' => $request->input('position_id'),
            'role_id' => $request->input('role_id'),
            'departement_id' => $request->input('departement_id'),
            'password' => $hashedPassword,
        ]);

        // Redirect ke halaman pegawai dengan pesan sukses
        return redirect()->route('karyawan.index')->with('message', 'Karyawan berhasil ditambahkan');
    }

    
}