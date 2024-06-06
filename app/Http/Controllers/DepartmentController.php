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

public function destroy($id)
{
    $department = Departement::findOrFail($id);
    $department->delete();

    return redirect()->route('departement.index')->with('success', 'Departemen berhasil dihapus.');
}

}
