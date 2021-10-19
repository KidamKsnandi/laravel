<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianTableSeeder extends Seeder
{

    public function run()
    {
        $pembelian = [
            [
                'id_pembelian'=>1010,'nama_barang' => 'PC', 'nama_suplier' => 'Altaf Faadil',
                'qty' => 2, 'tgl' => '2021-06-04'
            ],
            [
                'id_pembelian'=>1011, 'nama_barang' => 'Mouse', 'nama_suplier' => 'Kesyza Andriana Hartuti',
                'qty' => 4, 'tgl' => '2021-10-15'
            ],
            [
                'id_pembelian'=>1012, 'nama_barang' => 'Keyboard', 'nama_suplier' => 'Firman Romansyah',
                'qty' => 2, 'tgl' => '2021-09-24'
            ],
            [
                'id_pembelian'=>1013, 'nama_barang' => 'Laptop', 'nama_suplier' => 'Priyadi Sentosa',
                'qty' => 1, 'tgl' => '2021-02-09'
            ],
            [
                'id_pembelian'=>1014, 'nama_barang' => 'Monitor', 'nama_suplier' => 'Wildan Diar Nadzir',
                'qty' => 1, 'tgl' => '2021-02-12'
            ]
        ];

        DB::table('pembelian')->insert($pembelian);
    }
}
