<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function index1()
    {
        $listcutis = Cuti::with(['department', 'position', 'role'])->get();
        return view('admin.datacuti')->with('listcutis', $listcutis);
    }
    
    public function index2()

{
    $totalCuti = Cuti::sum('jml_cuti'); // Ubah 'jml_cuti' sesuai dengan nama kolom yang sesuai di database
    return view('admin.home')->with('totalCuti', $totalCuti);
}

}
