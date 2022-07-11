@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center text-center p-4 rounded w-50" style="background-color: #ffa64d;">
    <div class="row d-flex">
        <h3>Edit Ikan</h3>
        <form method="post" action="{{ url('/ikan/update') }}/{{ $data->id_ikan }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jenis Ikan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_ikan" placeholder="Jenis Ikan" value="{{ $data->jenis_ikan }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Harga Ikan</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="harga_ikan" placeholder="Harga" value="{{ $data->harga_ikan }}" required>
                        <span class="input-group-text">/Kg</span>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Stok Ikan</label>
                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control" name="stok_ikan" placeholder="Stok" value="{{ $data->stok_ikan }}" required>
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="ket_ikan" placeholder="Keterangan" style="resize: none">{{ $data->ket_ikan }}</textarea>
                </div>
            </div>
            <a class="btn btn-danger" href="{{ url('/ikan') }}">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection