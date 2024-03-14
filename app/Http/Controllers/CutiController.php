<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

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

        // $sisa_cuti = Auth::user()->jml_cuti - $request->jml_cuti;

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
 
        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Data ibu berhasil disimpan.');
    }
}