<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert([[
            'nama_pelanggan' => 'Andri',
            'alamat' => 'Jl. Ahmad Yani',
            'phone' => '087567347908',
            'email' => 'Andri18@gmail.com'
        ],
        [
            'nama_pelanggan' => 'Kevin',
            'alamat' => 'Jl. Puntodewo',
            'phone' => '081567234901',
            'email' => 'AhmadKevin55@yahoo.co.id'
        ],
        [
            'nama_pelanggan' => 'Anwar',
            'alamat' => 'Jl. Pagesangan',
            'phone' => '082761907291',
            'email' => 'Anwar67@gmail.com'
        ],
        [
            'nama_pelanggan' => 'Sultan',
            'alamat' => 'Jl. Dukuh Menanggal',
            'phone' => '087109821118',
            'email' => 'SultanMaulana@yahoo.co.id'
        ],
        [
            'nama_pelanggan' => 'Sukma',
            'alamat' => ' Jl. Semanggi',
            'phone' => '081726888909',
            'email' => 'MagdaSukma45@gmail.com'
        ],
        [
            'nama_pelanggan' => 'Andi',
            'alamat' => 'Jl. Adityawarman',
            'phone' => '081722333919',
            'email' => 'Andi76@gmail.com'
        ],
        [
            'nama_pelanggan' => 'Budi',
            'alamat' => 'Jl. Ciliwung',
            'phone' => '087771561898',
            'email' => 'budiheryanto98@gmail.com'
        ],
        [
            'nama_pelanggan' => 'Ajeng',
            'alamat' => 'Jl. Bendungan Sutami',
            'phone' => '089123491934',
            'email' => 'Ajeng@gmail.com'
        ],
        [
            'nama_pelanggan' => 'ely',
            'alamat' => 'Jl. Kolibri',
            'phone' => '081628367771',
            'email' => 'ely55@yahoo.co.id'
        ],
        [
            'nama_pelanggan' => 'Rommy',
            'alamat' => 'Jl. Beringin',
            'phone' => '085678123684',
            'email' => 'Rommyputra73@gmail.com'

        ]]);
    }
}

