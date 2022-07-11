@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <h2 class="mb-3">Data Pesanan</h2>
            <a class="btn btn-info mb-3" href="{{ url('/pesanan/create') }}">Tambah Pesanan</a>
            <table class="table table-bordered">
                <thead>
                    <tr class="table table-secondary text-center align-middle">
                        <th>ID</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Ikan</th>
                        <th>Banyak Pesanan</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $pesanan)
                    <tr class="align-middle">
                        <td width="40" class="text-center">{{ $pesanan->id_pesanan }}</td>
                        <td>{{ $pesanan->nama_pel }}</td>
                        <td width="200" class="text-center">{{ $pesanan->jenis_ikan }}</td>
                        <td width="200" class="text-center">{{ $pesanan->banyak_ikan }} Kg</td>
                        <td width="200" class="text-center">Rp. {{ number_format($pesanan->banyak_ikan * $pesanan->harga_ikan) }}</td>
                        <td width="100" class="text-center">
                            <a class="btn {{ ($pesanan->status_pesanan == 1) ? 'btn-primary' : 'btn-success disabled' }}" href="{{ url('/pesanan/update') }}/{{ $pesanan->id_pesanan }}" onclick="return confirm('Checkout Pesanan Ini ?');">{{ ($pesanan->status_pesanan == 1) ? 'Checkout' : 'Selesai' }}</a>
                        </td>
                        </td>
                        <td width=" 100" class="text-center"><a class="btn btn-danger" href="{{ url('pesanan/delete') }}/{{ $pesanan->id_pesanan }}" onclick="return confirm('Hapus Pelanggan Ini ?');">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection