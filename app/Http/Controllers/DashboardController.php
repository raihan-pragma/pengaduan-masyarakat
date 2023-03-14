<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class DashboardController extends Controller
{
    public function index()
    {
        $dtPengaduan = Pengaduan::paginate(5);
        return view('layouts.admin.dashboard',compact('dtPengaduan'));
    }
    
    public function daftar_pengaduan()
    {
        return view('layouts.admin.daftar-pengaduan');
    }

    public function data_tanggapan()
    {
        return view('layouts.admin.data-tanggapan');
    }
}
