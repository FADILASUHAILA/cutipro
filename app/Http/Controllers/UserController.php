<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
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
