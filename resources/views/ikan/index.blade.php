@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <h2 class="mb-3">Data Ikan</h2>
            <a class="btn btn-info mb-3" href="{{ url('/ikan/create') }}">Tambah Ikan</a>
            <table class="table table-bordered">
                <thead>
                    <tr class="table table-secondary text-center align-middle">
                        <th>ID</th>
                        <th>Jenis Ikan</th>
                        <th>Harga/Kg</th>
                        <th>Stok (Kg)</th>
                        <th>Keterangan</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $ikan)
                    <tr class="align-middle">
                        <td width="40" class="text-center">{{ $ikan->id_ikan }}</td>
                        <td>{{ $ikan->jenis_ikan }}</td>
                        <td width="200" class="text-center">Rp. {{ number_format($ikan->harga_ikan) }} /Kg</td>
                        <td width="100" class="text-center">{{ $ikan->stok_ikan }} Kg</td>
                        <td width="400">{{ $ikan->ket_ikan }}</td>
                        <td width="100" class="text-center"><a class="btn btn-warning" href="{{ url('/ikan/edit') }}/{{ $ikan->id_ikan }}">Edit</a></td>
                        <td width="100" class="text-center"><a class="btn btn-danger" href="{{ url('ikan/delete') }}/{{ $ikan->id_ikan }}" onclick="return confirm('Hapus Ikan Ini ?');">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection