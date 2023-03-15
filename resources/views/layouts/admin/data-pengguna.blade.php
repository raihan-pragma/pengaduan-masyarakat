@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>{{ $title }}</h3>
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
                  <div class="float-end mb-2">
                      <button class="btn btn-primary">+Data</button>
                  </div>
                <table class="table table-striped">
                    <thead>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Role</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Telp</th>
                        <th scope="col" class="text-center">Aksi</th>
                      </thead>   
                      <tbody>
                        @if ($dtPengguna->count() > 0)
                        @foreach ($dtPengguna as $item)
                        <tr>
                          <td class="text-center">{{ $loop->iteration }}</td>
                          <td class="text-center">{{ $item->name }}</td>
                          <td class="text-center">{{ $item->role }}</td>
                          <td class="text-center">{{ $item->email }}</td>
                          <td class="text-center">{{ $item->telp }}</td>
                          <td class="text-center">
                            <button class="btn rounded">
                              <a href="/create" class="text-warning">
                                <i class="bi bi-pencil-square"></i>
                              </a>|
                              <a href="" class="text-danger">
                                  <i class="bi bi-trash"></i>
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
    </section>
</div>
@endsection