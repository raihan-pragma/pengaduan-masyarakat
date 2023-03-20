@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>{{ $title }}</h3>
</div>
{{-- <div class="col-md-3 my-4">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" value="{{ $request }}">
    </form>
</div> --}}
<div class="page-content">
    <section class="row">
        <div class="row">
            <div class="col">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Pengaduan</th>
                        <th scope="col" class="text-center">Tempat Kejadian</th>
                        <th scope="col" class="text-center">Tanggapan</th>
                        <th scope="col" class="text-center">Foto Kejadian</th>
                    </thead>
                    <tbody>
                        @if ($dtPengaduan->count() > 0)
                        @foreach ($dtPengaduan as $item)
                          @if ($item->tanggapan)
                          <tr>
                              <td class="text-center">{{ $loop->iteration }}</td>
                              <td class="text-center">{{ $item->isi }}</td>
                              <td class="text-center">{{ $item->lokasi }}</td>
                              <td class="text-center">{{ $item->tanggapan }}</td>
                              <td class="text-center"><img src="{{ asset('/storage/' . $item->lampiran)}} " width="100px"></td>
    
                              {{-- <td class="text-center">
                                <button class="btn rounded">
                                  <a href="/create" class="text-warning">
                                    <i class="bi bi-pencil-square"></i>
                                  </a>|
                                  <a href="" class="text-danger">
                                      <i class="bi bi-trash"></i>
                                  </a>
                                </button>
                              </td> --}}
                            </tr> 
                            @endif
                          @endforeach
                          @else
                          <tr>
                              <td colspan="10" align="center"> Tidak ada Data</td>
                          </tr>
                        @endif
                      </tbody>
                </table>
              </div>
            </div>
            </div>  
        </div>
    </section>
</div>
@endsection