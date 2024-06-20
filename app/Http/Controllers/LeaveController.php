<?php

namespace App\Http\Controllers;
use App\Models\Leave;
use App\Models\listcutis;
use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;

class LeaveController extends Controller
{

public function index()

{
    $totalCuti = Cuti::count();
    $totalCuti = Cuti::sum('jml_cuti'); // Ubah 'jml_cuti' sesuai dengan nama kolom yang sesuai di database
    return view('user.index')->with('totalCuti', $totalCuti);
}


}
