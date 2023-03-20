@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>{{ $title }}</h3>
</div>
{{-- <div class="col-md-3 my-4">
    <input class="form-control mr-sm-2" type="search" placeholder="Name" aria-label="Search"
    name="cari" value="{{ $request->cari }}">
</div> --}}
<div class="page-content">
    <section class="row">
    <div class="row">
      <div class="float-right mb-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
          Generate Laporan
        </button>
      </div>
        <div class="col">
        <div class="card">
          <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                  <th scope="col" class="text-center">#</th>
                  <th scope="col" class="text-center">Pelapor</th>
                  <th scope="col" class="text-center">Pengaduan</th>
                  <th scope="col" class="text-center">Tempat Kejadian</th>
                  <th scope="col" class="text-center">Status</th>
                  <th scope="col" class="text-center">Foto Kejadian</th>
                  <th scope="col" class="text-center">Aksi</th>
                </thead>   
                <tbody>
                  @if ($dtPengaduan->count() > 0)
                  @foreach ($dtPengaduan as $item)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $item->user->name }}</td>
                    <td class="text-center">{{ $item->isi }}</td>
                    <td class="text-center">{{ $item->lokasi }}</td>
                    <td class="text-center">
                      @if ($item->status == 'menunggu')
                          <span class="btn btn-secondary" style="width: 105px" disabled>{{ $item->status }}</span>
                      @elseif ($item->status == 'proses')
                          <span class="btn btn-warning" style="width: 105px" disabled>{{ $item->status }}</span>
                      @elseif ($item->status == 'selesai')
                          <span class="btn btn-success" style="width: 105px" disabled>{{ $item->status }}</span>
                      @elseif ($item->status == 'ditolak')
                          <span class="btn btn-danger" style="width: 105px" disabled>{{ $item->status }}</span>
                      @endif
                    </td>
                    <td class="text-center"><img src="{{ asset('/storage/' . $item->lampiran)}} " width="100px"></td>
                    <td class="text-center">
                      <button class="btn rounded bg-warning">
                        <a href="/create{{ $item->id }}" class="text-light">
                          <i class="bi bi-pencil-square"></i> | Tanggapi
                        </a>
                      </button>
                    </td>
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
      @include('modal-cetak')
    </section>
</div>
@endsection