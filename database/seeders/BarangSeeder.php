<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'nama_barang' => 'Aqua',
            'qty' => 22,
            'harga_satuan' => 2000,
            'total' => 44000
        ],
        [
            'nama_barang' => 'Teh Botol',
            'qty' =>35,
            'harga_satuan' => 3000,
            'total' => 105000
        ],
        [
            'nama_barang' => 'Sari Roti',
            'qty' => 67,
            'harga_satuan' => 13500,
            'total' => 904500
        ],
        [
            'nama_barang' => 'Big cola',
            'qty' => 9,
            'harga_satuan' => 3500,
            'total' =>31500
        ],
        [
            'nama_barang' => 'Sprite',
            'qty' => 18,
            'harga_satuan' => 3500,
            'total'=>63000
        ],
        [
            'nama_barang' => 'Kacang Garuda',
            'qty' => 3,
            'harga_satuan' => 9500,
            'total' => 28500
        ],
        [
            'nama_barang' => 'pocari sweat ',
            'qty' => 18,
            'harga_satuan' => 6500,
            'total' => 117000
        ],
        [

            'nama_barang' => 'Mayumi mayonaise',
            'qty' =>8,
            'harga_satuan' =>8000,
            'total' => 64000
        ],
        [

            'nama_barang' => 'Seedap mie goreng',
            'qty' => 22,
            'harga_satuan' => 2200,
            'total' => 48400
        ],
        [

            'nama_barang' => 'ABC kecap manis',
            'qty' => 6,
            'harga_satuan' => 10900,
            'total' => 65400
        ]]);
        }

}
