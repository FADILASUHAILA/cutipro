<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{

    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nomor_pegawai', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check user's level and redirect accordingly
            if ($user->level == 'admin') {
                return redirect()->route('admin.home');
            } elseif ($user->level == 'karyawan') {
                return redirect()->route('karyawan.home');
            } else {
                // Default redirection for unknown level
                return redirect('/login');
            }
        }

        // If authentication fails
        return redirect('/login')->with('error', 'Login failed');
    }
}
