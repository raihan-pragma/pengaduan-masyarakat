@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>{{ $title }}</h3>
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
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Pelapor</th>
                    <th scope="col" class="text-center">Pengaduan</th>
                    <th scope="col" class="text-center">Tempat Kejadian</th>
                    <th scope="col" class="text-center">Status</th>
                    <th scope="col" class="text-center">Tanggapan</th>
                    <th scope="col" class="text-center">Foto Kejadian</th>
                  </thead>   
                  <tbody>
                    @if ($dtPengaduan->count() > 0)
                    @foreach ($dtPengaduan as $item)
                    @if ( $item->status == 'selesai') 
                    <tr>
                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td class="text-center">{{ $item->user->name }}</td>
                      <td class="text-center">{{ $item->isi }}</td>
                      <td class="text-center">{{ $item->lokasi }}</td>
                      <td class="text-center">
                        @if ($item->status == 'menunggu')
                          <span class="btn btn-secondary" disabled>{{ $item->status }}</span>
                        @elseif ($item->status == 'proses')
                          <span class="btn btn-warning" disabled>{{ $item->status }}</span>
                        @elseif ($item->status == 'selesai')
                          <span class="btn btn-success" disabled>{{ $item->status }}</span>
                        @elseif ($item->status == 'ditolak')
                          <span class="btn btn-danger" disabled>{{ $item->status }}</span>
                        @endif
                      </td>
                      <td class="text-center">{{ $item->tanggapan }}</td>
                      <td class="text-center">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#foto{{ $item->id  }}">
                          <img class="img-fluid rounded" src="{{ asset('/storage/' . $item->lampiran)}}"width="100px">
                        </button>
                      </td>
                      @endif
                    </tr>
                    @include('modal-foto')
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