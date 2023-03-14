<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd(auth()->user()->hasRole('user'));
        return view('home');
    }

    public function create(Request $request)
    {
        // $data = Pengaduan::all();
        // if($request->hasfile('lampiran')){
        //     $request->file('lampiran')->move('lampiran/',$request->file('lampiran')->getClientOriginalName());
        //     $data->foto = $request->file('lampiran')->getClientOriginalName();
        //     $data->save();
        // }
    }
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'judul' => 'required',
        //     'isi' => 'required',
        //     'tgl_pengaduan' => 'required',
        //     'lokasi' => 'required',
        //     'lampiran' => 'image|file|mimes:jpeg,png,jpg|max:5000',
        //     'user_id' => '1',
        //     // 'status' => ''
        // ]);

        // if ($request->file('lampiran')) {
        //     $data['lampiran'] = $request->file('lampiran')->store('post-images');
        // } 

        // // dd($request->all());

        // Pengaduan::create($data);

        // if ($data) {
            // return redirect('/pengaduan');
        // } else {
        //     return redirect('/');
        // }
         $data = Pengaduan::all();
        if($request->hasfile('lampiran')){
            $request->file('lampiran')->move('lampiran/',$request->file('lampiran')->getClientOriginalName());
            $data->lampiran = $request->file('lampiran')->getClientOriginalName();
            $data->save();
        }

        Pengaduan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'lokasi' => $request->lokasi,
            'lampiran'=>$request->lampiran,
            'status'=>$request->status,
            // 'lampiran' => $request->file('lampiran')->store('post-img'),
            'user_id' => $request->user_id,
        ]);
        return redirect('pengaduan');
    }



    public function pengaduan()
    {
        $dtPengaduan = Pengaduan::paginate(5);
        return view('pengaduan',compact('dtPengaduan'));
    }
}
