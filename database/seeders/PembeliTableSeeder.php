<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliTableSeeder extends Seeder
{

    public function run()
    {
        $pembeli = [
            [
                'id_pembeli'=>101, 'nama' => 'Kidam Kusnandi', 'jns_kelamin' => 'Laki-Laki', 'alamat' => 'Citamiang Kidul',
                'kode_pos' => 40239, 'kota' => 'Bandung', 'tgl_lahir' => '2004-06-06'
            ],
            [
                'id_pembeli'=>102, 'nama' => 'Akbar Ginanjar', 'jns_kelamin' => 'Laki-Laki', 'alamat' => 'Cibiuk',
                'kode_pos' => 47589, 'kota' => 'Bandung', 'tgl_lahir' => '2004-02-17'
            ],
            [
                'id_pembeli'=>103, 'nama' => 'Aldi Awaludin', 'jns_kelamin' => 'Laki-Laki', 'alamat' => 'Babakan Nugraha',
                'kode_pos' => 40339, 'kota' => 'Bandung', 'tgl_lahir' => '2003-12-21'
            ],
            [
                'id_pembeli'=>104, 'nama' => 'Alvin Hardinata', 'jns_kelamin' => 'Laki-Laki', 'alamat' => 'Rancamanyar',
                'kode_pos' => 40341, 'kota' => 'Bandung', 'tgl_lahir' => '2005-04-09'
            ],
            [
                'id_pembeli'=>105, 'nama' => 'Dina Amelia', 'jns_kelamin' => 'Perempuan', 'alamat' => 'Babakan Nugraha',
                'kode_pos' => 40339, 'kota' => 'Bandung', 'tgl_lahir' => '2004-03-13'
            ]
        ];

        DB::table('pembeli')->insert($pembeli);
    }
}
