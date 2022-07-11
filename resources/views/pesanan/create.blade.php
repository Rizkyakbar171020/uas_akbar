@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center text-center p-4 rounded w-50" style="background-color: #ffa64d;">
    <div class="row d-flex">
        <h3>Tambah Pesanan</h3>
        <form method="post" action="{{ url('/pesanan/store') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-start">Nama Pelanggan</label>
                <div class="col-sm-8">
                    <select class="form-select" name="id_pel">
                        <option value="">Pilih</option>
                        @foreach ($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->id_pel }}">{{ $pelanggan->nama_pel }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-start">Jenis Ikan</label>
                <div class="col-sm-8">
                    <select class="form-select" name="id_ikan">
                        <option value="">Pilih</option>
                        @foreach ($ikans as $ikan)
                        <option value="{{ $ikan->id_ikan }}">{{ $ikan->jenis_ikan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label text-start">Banyak Pesanan</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <input type="text" class="form-control" name="banyak_ikan" placeholder="Banyak Pesanan" required>
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
            <a class="btn btn-danger" href="{{ url('/pelanggan') }}">Batal</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection