@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center text-center p-4 rounded w-50" style="background-color: #ffa64d;">
    <div class="row d-flex">
        <h3>Tambah Pelanggan</h3>
        <form method="post" action="{{ url('/pelanggan/store') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-start">Nama Pelanggan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pel" placeholder="Nama Pelanggan" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-start">Handphone</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="text" class="form-control" name="hp_pel" placeholder="Handphone" required>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-start">Alamat</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="alamat_pel" placeholder="Alamat" style="resize: none"></textarea>
                </div>
            </div>
            <a class="btn btn-danger" href="{{ url('/pelanggan') }}">Batal</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection