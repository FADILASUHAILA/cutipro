<?php

namespace App\Http\Controllers;
use App\Models\Leave;
use App\Models\listcutis;
use App\Models\Cuti;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

public function index()

{
    $totalCuti = Cuti::sum('jml_cuti'); // Ubah 'jml_cuti' sesuai dengan nama kolom yang sesuai di database
    return view('user.index')->with('totalCuti', $totalCuti);
}

public function index2()

{
    $totalCuti = Cuti::sum('jml_cuti'); // Ubah 'jml_cuti' sesuai dengan nama kolom yang sesuai di database
    return view('admin.home')->with('totalCuti', $totalCuti);
}

}
