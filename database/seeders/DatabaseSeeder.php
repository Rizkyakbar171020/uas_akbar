<?php

namespace Database\Seeders;

use App\Models\Ikan;
use \App\Models\User;
use App\Models\Pesanan;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Akbar',
            'email' => 'akbar@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        Ikan::create([
            'jenis_ikan' => 'Tuna',
            'harga_ikan' => 1000000,
            'stok_ikan' => 400,
            'ket_ikan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ]);

        Ikan::create([
            'jenis_ikan' => 'Tuna',
            'harga_ikan' => 1000000,
            'stok_ikan' => 400,
            'ket_ikan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ]);

        Ikan::create([
            'jenis_ikan' => 'Tuna',
            'harga_ikan' => 1000000,
            'stok_ikan' => 400,
            'ket_ikan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ]);

        Ikan::create([
            'jenis_ikan' => 'Tuna',
            'harga_ikan' => 1000000,
            'stok_ikan' => 400,
            'ket_ikan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ]);

        Ikan::create([
            'jenis_ikan' => 'Tuna',
            'harga_ikan' => 1000000,
            'stok_ikan' => 400,
            'ket_ikan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ]);

        Pelanggan::create([
            'nama_pel' => 'Tono',
            'hp_pel' => '8176562728',
            'alamat_pel' => 'Jl. Soekarno - Hatta'
        ]);

        Pelanggan::create([
            'nama_pel' => 'Tono',
            'hp_pel' => '8176562728',
            'alamat_pel' => 'Jl. Soekarno - Hatta'
        ]);

        Pelanggan::create([
            'nama_pel' => 'Tono',
            'hp_pel' => '8176562728',
            'alamat_pel' => 'Jl. Soekarno - Hatta'
        ]);

        Pelanggan::create([
            'nama_pel' => 'Tono',
            'hp_pel' => '8176562728',
            'alamat_pel' => 'Jl. Soekarno - Hatta'
        ]);

        Pelanggan::create([
            'nama_pel' => 'Tono',
            'hp_pel' => '8176562728',
            'alamat_pel' => 'Jl. Soekarno - Hatta'
        ]);

        Pesanan::create([
            'id_pel' => 1,
            'id_ikan' => 1,
            'banyak_ikan' => 20
        ]);

        Pesanan::create([
            'id_pel' => 1,
            'id_ikan' => 1,
            'banyak_ikan' => 20
        ]);

        Pesanan::create([
            'id_pel' => 1,
            'id_ikan' => 1,
            'banyak_ikan' => 20
        ]);

        Pesanan::create([
            'id_pel' => 1,
            'id_ikan' => 1,
            'banyak_ikan' => 20
        ]);

        Pesanan::create([
            'id_pel' => 1,
            'id_ikan' => 1,
            'banyak_ikan' => 20
        ]);
    }
}
