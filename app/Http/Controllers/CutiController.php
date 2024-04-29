<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;

class CutiController extends Controller
{



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

    public function getEvents(Request $request) {
        $cutis = Cuti::all();
        $events = [];
    
        foreach ($cutis as $cuti) {
            $tanggalMulai = new \DateTime($cuti->cuti);
            $tanggalSelesai = new \DateTime($cuti->masuk);
            $interval = new \DateInterval('P1D'); // Interval satu hari
            $periodeCuti = new \DatePeriod($tanggalMulai, $interval, $tanggalSelesai->modify('+1 day'));
    
            foreach ($periodeCuti as $tanggal) {
                // Cek apakah tanggal saat ini bukan sama dengan tanggal masuk
                if ($tanggal < $tanggalSelesai && $tanggal->format('Y-m-d') != $cuti->masuk) {
                    $events[] = [
                        'title' => $cuti->nama, // Menampilkan nama orang yang mengambil cuti
                        'start' => $tanggal->format('Y-m-d'),
                        'color' => 'red'
                    ];
                }
            }
        }
        return response()->json($events);
    }





}