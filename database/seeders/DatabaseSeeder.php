<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(BiodatasTableSeeder::class);
        $this->call(BarangTableSeeder::class);
        $this->call(PembeliTableSeeder::class);
        $this->call(SuplierTableSeeder::class);
        $this->call(PesananTableSeeder::class);
        $this->call(PembelianTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
