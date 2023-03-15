@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>Daftar Pengaduan</h3>
</div>
<div class="col-md-3 my-4">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
</div>
<div class="page-content">
    <section class="row">
        <div class="row">
            <div class="col">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Pelapor</th>
                        <th scope="col" class="text-center">Pengaduan</th>
                        <th scope="col" class="text-center">Lokasi</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Lampiran</th>
                        <th scope="col" class="text-center">Aksi</th>
                                  </tr>
                                </thead>   
                                <tbody>
                                  @if ($dtPengaduan->count() > 0)
                                @foreach ($dtPengaduan as $item)
                                  <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->user->name }}</td>
                                    <td class="text-center">{{ $item->isi }}</td>
                                    <td class="text-center">{{ $item->lokasi }}</td>
                                    <td class="text-center">{{ $item->status }}</td>
                                    <td class="text-center"><img src="{{ asset('/storage/' . $item->lampiran)}} " width="100px"></td>
                                    <td class="text-center">ubah|lihat</td>
                                      @endforeach
                                      @else
                                          <tr>
                                              <td colspan="10" align="center"> Tidak ada Data</td>
                                          </tr>
                                      @endif
                                    </tr>
                                </tbody>
                              </table> 
              </div>
            </div>
            </div>  
        </div>
    </section>
</div>
@endsection