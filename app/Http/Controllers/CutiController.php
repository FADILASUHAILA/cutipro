<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;

class CutiController extends Controller
{
    public function dataibu()
    {
       $listcutis = Cuti::all();
        return view('pengajuan')->with('listcutis',$listcutis);
    }
    public function store(Request $request)
    {
        // Validasi form input jika diperlukan
        $request->validate([
            'jenis_cuti' => 'required',
            'keterangan' => 'required',
            'jml_cuti' => 'required|numeric',
            'cuti' => 'required|date',
            'masuk' => 'required|date',
            'alamat' => 'required',
            'telp' => 'required',
        ]);
        $user = Auth::user();
        // Menghitung sisa cuti terbaru
        $sisaCutiTerbaru = $user->jml_cuti - $request->jml_cuti;
        
        // Memastikan sisa cuti tidak kurang dari 0
        $sisaCutiTerbaru = max($sisaCutiTerbaru, 0);
        if ($user->jml_cuti == 0) {
            // Jika iya, kirimkan pesan notifikasi
            return redirect()->back()->with('error', 'Anda telah menggunakan semua cuti Anda.');
        }
    
        // Logika penyimpanan data cuti
    
        // Mengirim notifikasi ke view jika penyimpanan berhasil
        Session::flash('success', 'Data cuti berhasil disimpan.');
        return redirect()->back();

        // Simpan data ke dalam tabel listcutis
        Cuti::create([
            'id_user' => $request->id_user,
            'input' => $request->input,
            'no_peg' => $request->no_peg,
            'nama' => $request->nama,
            'email' => $request->email,
            'department' => $request->department,
            'position' => $request->position,
            'jenis_cuti' => $request->jenis_cuti,
            'keterangan' => $request->keterangan,
            'jml_cuti' => $request->jml_cuti,
            'sisa_cuti' => $request->sisa_cuti,
            'cuti' => $request->cuti,
            'masuk' => $request->masuk,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        
        // Memperbarui nilai jml_cuti pada pengguna
        $user->jml_cuti = $sisaCutiTerbaru;
        
            $user->save();
  // Cetak pesan kesalahan
        
        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
    }
}