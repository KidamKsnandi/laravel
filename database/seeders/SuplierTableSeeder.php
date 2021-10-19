<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierTableSeeder extends Seeder
{

    public function run()
    {
        $suplier = [
            [
                'id_suplier'=>111, 'nama' => 'Altaf Faadil', 'alamat' => 'Nusa ',
                'kode_pos' => 40564, 'kota' => 'Bandung'
            ],
            [
                'id_suplier'=>112, 'nama' => 'Kesyza Andriana Hartuti', 'alamat' => 'Rancamanyar',
                'kode_pos' => 40654, 'kota' => 'Bandung'
            ],
            [
                'id_suplier'=>113, 'nama' => 'Firman Romansyah', 'alamat' => 'Cilebak',
                'kode_pos' => 40389, 'kota' => 'Bandung'
            ],
            [
                'id_suplier'=>114, 'nama' => 'Priyadi Sentosa', 'alamat' => 'Sekeeawi',
                'kode_pos' => 40261, 'kota' => 'Bandung'
            ],
            [
                'id_suplier'=>115, 'nama' => 'Wildan Diar Nadzir', 'alamat' => 'Rancamanyar',
                'kode_pos' => 40654, 'kota' => 'Bandung'
            ]
        ];

        DB::table('suplier')->insert($suplier);
    }
}
