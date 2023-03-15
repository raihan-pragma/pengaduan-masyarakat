@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <h3>{{ $title }}</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body mx-5">
                            <h5 class="mb-4">Form Tanggapan</h5>
                        <form action="/tanggapan{{ $record->id }}" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="">Tanggapan</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="tanggapan" id="" class="form-control" rows="2">{{ $record->tanggapan }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <label for="">Status</label>
                                </div>
                                <div class="col-md-4">
                                    <select name="status" class="form-control">
                                        <option selected>{{ $record->status }}</option>
                                        <option value="Proses"> Proses</option>
                                        <option value="Selesai"> Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </section>
</div>
@endsection