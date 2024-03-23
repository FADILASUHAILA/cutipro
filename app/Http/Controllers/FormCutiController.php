<?php

namespace App\Http\Controllers;
use App\Models\FormCuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class FormCutiController extends Controller
{
    public function create()
    {
        // Anda mungkin ingin mendapatkan data yang diperlukan di sini sebelum menampilkan formulir
        $cutis = FormCuti::where('id_user', Auth::id())->get();

        return view('cuti.create', compact('cutis'));
    }

    public function store(Request $request)
    {
        // Validasi data input jika diperlukan
        $request->validate([
            // atur aturan validasi sesuai kebutuhan
        ]);

        // Hitung sisa cuti
        $latestCuti = FormCuti::where('id_user', Auth::id())->latest()->first();

        // Menghitung sisa cuti
        if ($latestCuti) {
            $sisaCuti = $latestCuti->sisa_cuti - $request->jml_cuti;
        } else {
            // Jika ini adalah cuti pertama, maka sisa cuti awalnya adalah 19 dikurangi jumlah cuti yang diambil
            $sisaCuti = 19 - $request->jml_cuti;
        }

        // Simpan data cuti
        $cuti = new FormCuti([
            'id_user' => Auth::id(),
            'role_id' => $request->role_id, // sesuaikan dengan field yang benar
            'input' => now(),
            'no_peg' => $request->no_peg,
            'nama' => $request->name,
            'departement' => $request->departement,
            'position' => $request->position_id,
            'jenis_cuti' => $request->jenis_cuti,
            'keterangan' => $request->keterangan,
            'jml_cuti' => $request->jml_cuti,
            'sisa_cuti' => $sisaCuti,
            'cuti' => $request->cuti,
            'masuk' => $request->masuk,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'is_approve' => 1, // Default status menunggu persetujuan
        ]);

        $cuti->save();

        // Redirect atau lakukan operasi lainnya setelah penyimpanan data

        return redirect()->route('cuti.create')->with('success', 'Pengajuan cuti berhasil disimpan.');
    }
}
