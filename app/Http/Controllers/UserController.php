<?php

namespace App\Http\Controllers;
use App\Models\Cuti;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $totalCuti = Cuti::count();
        return view('user.index', ['totalCuti' => $totalCuti]);
    }

    public function index2()
    {
        $listcutis = Cuti::with(['department','position','role'])->get();
        $totalCuti = Cuti::sum('jml_cuti');
        return view('user.index', compact('listcutis', 'totalCuti'));
    }

    public function pengajuan() {
        return view('user.pengajuan');
    }

}

    