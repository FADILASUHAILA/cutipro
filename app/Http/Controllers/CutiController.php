<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function datacuti()
    {
        $cutis = auth()->user()->cutis;
        return view('historyrecord')->with('cutis', $cutis);
    }

    public function showPengajuanForm()
    {
        $cutis = Cuti::all(); // Sesuaikan dengan cara Anda mendapatkan data cuti
        return view('user.pengajuan', compact('cutis'));
    }
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'jenis_cuti' => 'required|string', // Contoh: jenis cuti harus diisi dan berupa string
        'keterangan' => 'nullable|string', // Contoh: keterangan boleh diisi atau boleh kosong, harus berupa string jika diisi
        'jml_cuti' => 'required|integer|min:1', // Contoh: jumlah cuti harus diisi, harus berupa angka integer, dan minimal 1
        'cuti_start' => 'required|date', // Contoh: tanggal mulai cuti harus diisi dan berupa format tanggal
        'cuti_end' => 'required|date|after_or_equal:cuti_start', // Contoh: tanggal akhir cuti harus diisi, berupa format tanggal, dan setelah atau sama dengan tanggal mulai cuti
        'masuk_kerja' => 'required|date|after_or_equal:cuti_end', // Contoh: tanggal masuk kerja setelah atau sama dengan tanggal akhir cuti
        'alamat' => 'nullable|string', // Contoh: alamat boleh diisi atau boleh kosong, harus berupa string jika diisi
        'telp' => 'nullable|string',
    ]);

    $cuti = new Cuti();
    $cuti->user_id = auth()->user()->id;
    $cuti->jenis_cuti = $request->jenis_cuti;
    $cuti->keterangan = $request->keterangan;
    $cuti->jml_cuti = $request->jml_cuti;
    $cuti->cuti_start = $request->cuti_start;
    $cuti->cuti_end = $request->cuti_end;
    $cuti->masuk_kerja = $request->masuk_kerja;
    $cuti->alamat = $request->alamat;
    $cuti->telp = $request->telp;
    $cuti->save();
    // Simpan data anak ke database
    return redirect()->back()->with('success', 'Data cuti berhasil dikirim');
}
}