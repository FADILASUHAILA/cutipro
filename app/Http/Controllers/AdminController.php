<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $totalCuti = Cuti::count();
        return view('admin.index', ['totalCuti' => $totalCuti]);
    
    }

    public function index1()
    {
        $listcutis = Cuti::with(['department', 'position', 'role'])->get();
        return view('admin.datacuti')->with('listcutis', $listcutis);
    }
    
    public function index2()
    {
        $listcutis = Cuti::with(['department','position','role'])->get();
        $totalCuti = Cuti::sum('jml_cuti');
        return view('admin.home', compact('listcutis', 'totalCuti'));
    }
    


}
