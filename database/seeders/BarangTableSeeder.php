<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangTableSeeder extends Seeder
{

    public function run()
    {
        $barang = [
            [
                'nama' => 'PC', 'varian' => 'Unit',
                'harga_beli' => 5000000, 'harga_jual' => 5500000
            ],
            [
                'nama' => 'Mouse', 'varian' => 'Unit',
                'harga_beli' => 90000, 'harga_jual' => 100000
            ],
            [
                'nama' => 'Keyboard', 'varian' => 'Unit',
                'harga_beli' => 129000, 'harga_jual' => 140000
            ],
            [
                'nama' => 'Laptop', 'varian' => 'Unit',
                'harga_beli' => 4000000, 'harga_jual' => 4200000
            ],
            [
                'nama' => 'Monitor', 'varian' => 'Unit',
                'harga_beli' => 850000, 'harga_jual' => 899000
            ]
        ];

        DB::table('barang')->insert($barang);
    }
}
