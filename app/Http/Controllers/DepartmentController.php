<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Departement::all(); // Mengambil semua data departemen

        return view('superadmin.departement', ['departments' => $departments]);
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'department_name' => 'required',
        'ketua_department_name' =>'required',
    ]);
    // Simpan data anak ke database
    Departement::create($validatedData);
    // Redirect atau kembalikan respon yang sesuai
    return redirect()->back()->with('success', 'Data department berhasil disimpan.');
}

public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'department_name' => 'required|string|max:255',
            'ketua_department_name' => 'required|string|max:255',
        ]);

        // Cari departement berdasarkan ID
        $departement = Departement::findOrFail($id);

        // Update data departement
        $departement->department_name = $request->input('department_name');
        $departement->ketua_department_name = $request->input('ketua_department_name');
        $departement->save();

        // Redirect kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('superadmin.departement')->with('success', 'Departement berhasil diperbarui');
    }

public function destroy($id)
{
    $departement = Departement::findOrFail($id);
    $departement->delete();

    return redirect()->route('superadmin.departement')->with('success', 'Departement berhasil dihapus.');
}

}
