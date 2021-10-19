<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananTableSeeder extends Seeder
{

    public function run()
    {
        $pesanan = [
            [
                'id_pesanan'=>1001, 'nama_pelanggan' => 'Kidam Kusnandi', 'nama_barang' => 'PC',
                'qty' => 2, 'tgl_pesan' => '2021-06-04'
            ],
            [
                'id_pesanan'=>1002, 'nama_pelanggan' => 'Akbar Ginanjar', 'nama_barang' => 'Mouse',
                'qty' => 4, 'tgl_pesan' => '2021-10-15'
            ],
            [
                'id_pesanan'=>1003, 'nama_pelanggan' => 'Aldi Awaludin', 'nama_barang' => 'Keyboard',
                'qty' => 2, 'tgl_pesan' => '2021-09-24'
            ],
            [
                'id_pesanan'=>1004, 'nama_pelanggan' => 'Alvin Hardinata', 'nama_barang' => 'Laptop',
                'qty' => 1, 'tgl_pesan' => '2021-02-09'
            ],
            [
                'id_pesanan'=>1005, 'nama_pelanggan' => 'Dina Amelia', 'nama_barang' => 'Monitor',
                'qty' => 1, 'tgl_pesan' => '2021-02-12'
            ]
        ];

        DB::table('pesanan')->insert($pesanan);
    }
}
