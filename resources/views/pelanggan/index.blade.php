@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <h2 class="mb-3">Data Pelanggan</h2>
            <a class="btn btn-info mb-3" href="{{ url('/pelanggan/create') }}">Tambah Pelanggan</a>
            <table class="table table-bordered">
                <thead>
                    <tr class="table table-secondary text-center align-middle">
                        <th>ID</th>
                        <th>Nama Pelanggan</th>
                        <th>Handphone</th>
                        <th>Alamat</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $pelanggan)
                    <tr class="align-middle">
                        <td width="40" class="text-center">{{ $pelanggan->id_pel }}</td>
                        <td>{{ $pelanggan->nama_pel }}</td>
                        <td width="200" class="text-center">+62 {{ $pelanggan->hp_pel }}</td>
                        <td width="500" class="text-center">{{ $pelanggan->alamat_pel }}</td>
                        <td width="100" class="text-center"><a class="btn btn-warning" href="{{ url('/pelanggan/edit') }}/{{ $pelanggan->id_pel }}">Edit</a></td>
                        <td width="100" class="text-center"><a class="btn btn-danger" href="{{ url('pelanggan/delete') }}/{{ $pelanggan->id_pel }}" onclick="return confirm('Hapus Pelanggan Ini ?');">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection