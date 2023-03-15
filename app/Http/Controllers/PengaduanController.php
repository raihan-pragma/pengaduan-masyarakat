<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Http\Requests\StorePengaduanRequest;
use App\Http\Requests\UpdatePengaduanRequest;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // if($request){
        // $dtPengaduan = Pengaduan::where('user_id->name','like','%'.$request->cari.'%')
        // ->paginate(5);
        // }
        // else{
            $dtPengaduan = Pengaduan::paginate(5);
        // }
        return view('layouts.admin.daftar-pengaduan',[
            'title' => 'Daftar Pengaduan',
        ], compact('dtPengaduan','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengaduanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Pengaduan::create();
        // return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Pengaduan::findorfail($id);
        // dd($record);
        return view('layouts.admin.tanggapan', 
        [
            "title" => "Tanggapan",
        ], compact('record'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengaduanRequest  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $record = Pengaduan::findorfail($id);
        $record->update($request->all());
        
        // dd($record);
        return redirect('/data-tanggapan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
