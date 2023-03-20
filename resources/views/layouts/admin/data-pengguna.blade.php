@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>{{ $title }}</h3>
</div>
{{-- <div class="col-md-3 my-4">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
</div> --}}
<div class="page-content">
    <section class="row">
        <div class="row">
          {{-- <div class="float-right mb-2">
            <a href="/pengguna" class="btn btn-primary">+Data</a>
          </div> --}}
            <div class="col">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Telp</th>
                        {{-- <th scope="col" class="text-center">Aksi</th> --}}
                      </thead>   
                      <tbody>
                        @if ($dtPengguna->count() > 0)
                        @foreach ($dtPengguna as $item)
                        <tr>
                          <td class="text-center">{{ $loop->iteration }}</td>
                          <td class="text-center">{{ $item->name }}</td>
                          <td class="text-center">{{ $item->email }}</td>
                          <td class="text-center">{{ $item->telp }}</td>
                          {{-- <td class="text-center">
                            <button class="btn btn-warning">
                              <a href="/create" class="text-light">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                          </td> --}}
                        </tr> 
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