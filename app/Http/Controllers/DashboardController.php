<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class DashboardController extends Controller
{
    public function index()
    {

        $dtPengaduan = Pengaduan::paginate(5);
        return view('layouts.admin.dashboard',compact('dtPengaduan'),[
            'title' => 'Dashboard',
        ]);
    }
    
    public function daftar_pengaduan()
    {   
        $dtPengaduan = Pengaduan::paginate(5);
        return view('layouts.admin.daftar-pengaduan',compact('dtPengaduan'),[
            'title' => 'Pengaduan',
        ]);
    }

    public function data_tanggapan()
    {
        $dtTanggapan = Tanggapan::paginate(5);
        return view('layouts.admin.data-tanggapan',[
            'title' => 'Tanggapan',
        ]);
    }
}
