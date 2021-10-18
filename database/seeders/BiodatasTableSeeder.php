<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{

    public function run()
    {
        $biodatas = [
            [
                'name' => 'Kidam Kusnandi', 'bornDate' => '2004-06-06', 'gender' => 'Laki-Laki',
                'address' => 'Citamiang Kidul', 'religion' => 'Islam', 'age' => 17
            ],
            [
                'name' => 'Akbar Ginanjar', 'bornDate' => '2004-02-17', 'gender' => 'Laki-Laki',
                'address' => 'Cibiuk', 'religion' => 'Islam', 'age' => 17
            ],
            [
                'name' => 'Aldi Awaludin', 'bornDate' => '2003-12-21', 'gender' => 'Laki-Laki',
                'address' => 'Babakan Nugraha', 'religion' => 'Islam', 'age' => 17
            ],
            [
                'name' => 'Muhammad Hasanudin Ali', 'bornDate' => '2004-04-24', 'gender' => 'Laki-Laki',
                'address' => 'Batuwangi', 'religion' => 'Islam', 'age' => 17
            ],
            [
                'name' => 'Firman Romansyah', 'bornDate' => '2004-08-17', 'gender' => 'Laki-Laki',
                'address' => 'Babakan', 'religion' => 'Islam', 'age' => 17
            ]
        ];

        DB::table('biodatas')->insert($biodatas);
      }
}
