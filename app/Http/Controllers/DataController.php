<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth; 
class DataController extends Controller
{
    public function index()
    {
    $listcutis = Cuti::with(['department', 'position', 'role'])->get();
    return view('admin.datacuti', compact('listcutis'));
    }

    public function index1()
{
    // Mendapatkan informasi pengguna yang sedang login
    $user = Auth::user();

    // Mengambil data cuti berdasarkan ID pengguna yang sedang login
    $listcutis= Cuti::where('id_user', $user->id)->get();

    // Kemudian, lewatkan data cuti ke dalam view untuk ditampilkan
    return view('user.recorduser', compact('listcutis'));
}


public function index2(Request $request)
{
    $tahun = $request->tahun;
    
    if ($tahun) {
        $listcutis = Cuti::whereYear('input', $tahun)->get();
    } else {
        $listcutis = Cuti::all();
    }

    return view('user.recorduser', compact('listcutis'));
}




}
