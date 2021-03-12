<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([[
            'nama' => 'Auful',
            'alamat' => 'Sidoarjo',
            'tanggal_lahir' => '20010303',
            'posisi' => 'Manajer Karyawan',
            'gaji' => 20000000
        ],[
            'nama' => 'Shelyca',
            'alamat' => 'Pasuruan',
            'tanggal_lahir' => '20010506',
            'posisi' => 'Asisten Manajer',
            'gaji' => 10000000
        ],[
            'nama' => 'Ilham',
            'alamat' => 'Surabaya',
            'tanggal_lahir' => '20010706',
            'posisi' => 'Kepala Staff',
            'gaji' => 8000000
        ],[
            'nama' => 'Munir',
            'alamat' => 'blitar',
            'tanggal_lahir' => '20000506',
            'posisi' => 'Pegawai Tk. I',
            'gaji' => 4000000
        ],[
            'nama' => 'Ali',
            'alamat' => 'Mojokerto',
            'tanggal_lahir' => '20011106',
            'posisi' => 'Pegawai Tk. II',
            'gaji' => 3000000
        ]]);
    }
}
