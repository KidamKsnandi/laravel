<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
      $posts = [
          ['title' => 'Tips Cepat Programmer', 'content' => 'lorem ipsum'],
          ['title' => 'Haruskah Jadi Superman?', 'content' => 'lorem ipsum'],
          ['title' => 'Membangun Visi Misi Keluarga', 'content' => 'lorem ipsum']
      ];

      DB::table('posts')->insert($posts);
    }
}
