<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth; 

use Barryvdh\DomPDF\Facade\Pdf;

class DataController extends Controller
{
    //menampilkan data cuti di admin
    public function index()
    {

    $listcutis = Cuti::with(['department', 'position', 'role'])->get();
    return view('admin.datacuti', compact('listcutis'));

        $listcutis = Cuti::with(['department', 'position', 'role'])->get();

        return view('admin.datacuti')->with('listcutis', $listcutis);

        return view('user.recorduser')->with('listcutis', $listcutis);


    }

    public function index3(Request $request)
{
    $tahun = $request->tahun;
    $name = $request->name;

    if ($tahun) {
        $listcutis = Cuti::whereYear('input', $tahun)->get();
    }
    else {
        $listcutis = Cuti::all();
    }
    return view('admin.datacuti', compact('listcutis'));
}

// menampilkan data cuti di user
public function index1()
{
    // Mendapatkan informasi pengguna yang sedang login
    $user = Auth::user();

    // Mengambil data cuti berdasarkan ID pengguna yang sedang login
    $listcutis= Cuti::where('id_user', $user->id)->get();

    // Kemudian, lewatkan data cuti ke dalam view untuk ditampilkan
    return view('user.recorduser', compact('listcutis'));
}

//menampilkan data cuti user menuhrut tahun
public function index2(Request $request)
{
    $tahun = $request->tahun;
    
    if ($tahun) {
        $listcutis = Cuti::whereYear('input', $tahun)->get();
    } else {
        $listcutis = Cuti::all();
    }

    return view('user.recorduser', compact('listcutis'));
}
public function cetak_pdf($id){
    $list_cuti = Cuti::findOrFail($id);

    $pdf = PDF::loadView('user.karyawan_pdf', ['list_cuti' => $list_cuti])->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
    return $pdf->download('laporan-karyawan.pdf');

}

    public function showCalendar()
{
    $user = Auth::user();
    $listcutis = Cuti::where('id_user', $user->id)->get();
    $calendar_urls = [];

    foreach ($listcutis as $cuti) {
        $start_date = $cuti->start_date->format('Ymd');
        $end_date = $cuti->end_date->format('Ymd');
        $description = urlencode("Cuti: " . $cuti->description);

        $url = "https://calendar.google.com/calendar/render?action=TEMPLATE&dates=$start_date/$end_date&text=$description&color=%23FF0000";
        
        $calendar_urls[] = $url;
    }

    return view('user.pengajuan', compact('calendar_urls'));
    
}

}



