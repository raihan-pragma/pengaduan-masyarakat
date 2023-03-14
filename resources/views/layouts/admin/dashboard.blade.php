@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="mb-4">
            <a href="" class="btn btn-primary float-end"> <i class="fas fa-print"></i> Generate Laporan</a>
        </div>
        <div class="row">
            <div class="col">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daftar Pengaduan</h4>
                <table class="table table-striped">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Pengaduan</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Lampiran</th>
                    </thead>
                    <tbody>
                        @if ($dtPengaduan->count() > 0)
                      @foreach ($dtPengaduan as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->user_id }}</td>
                          <td>{{ $item->isi }}</td>
                          <td>{{ $item->lokasi }}</td>
                          <td>{{ $item->tgl_pengaduan }}</td>
                          <td><img src="{{$item->lampiran}}" width="100px"></td>
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