<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Karyawan;
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
        return view('user.index');    
    }

    public function pengajuan() {
        return view('user.pengajuan');
    }

    public function datacuti() {
        return view('user.recorduser');
    }

    public function datauser()
    {
        $users = Karyawan::all();
        return view('user.index')->with('users',$users);
    }
    
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'Data pengguna berhasil diperbarui.');
    }

}

    