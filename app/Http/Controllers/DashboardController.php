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
    
}
