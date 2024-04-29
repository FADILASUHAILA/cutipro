<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth; 
class DataController extends Controller
{
    public function index()
    {
        $listcutis = Cuti::with(['department', 'position', 'role'])->get();
        return view('admin.datacuti')->with('listcutis', $listcutis);
    }

    public function index1()
{
    // Mendapatkan informasi pengguna yang sedang login
    $user = Auth::user();

    // Mengambil data cuti berdasarkan ID pengguna yang sedang login
    $listcutis= Cuti::where('id_user', $user->id)->get();

    // Kemudian, lewatkan data cuti ke dalam view untuk ditampilkan
    return view('user.recorduser', compact('listcutis'));
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
