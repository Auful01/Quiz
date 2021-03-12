<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([[
            'nama' => 'Sidomunggah',
            'jenis' => 'Perusahaan',
            'kontrak_tahun' => '2 Tahun',
            'biayaKontrak_tahun' => 10000000,
        ],[
            'nama' => 'Old Era',
            'jenis' => 'Perusahaan',
            'kontrak_tahun' => '5 Tahun',
            'biayaKontrak_tahun' => 9000000,
        ],[
            'nama' => 'Tukimin',
            'jenis' => 'Perorangan',
            'kontrak_tahun' => '2 Tahun',
            'biayaKontrak_tahun' => 5000000,
        ],[
            'nama' => 'Sri',
            'jenis' => 'Perorangan',
            'kontrak_tahun' => '5 Tahun',
            'biayaKontrak_tahun' => 3000000,
        ],[
            'nama' => 'Santuy Bersama',
            'jenis' => 'Perusahaan',
            'kontrak_tahun' => '10 Tahun',
            'biayaKontrak_tahun' => 15000000,
        ]]);
    }
}
