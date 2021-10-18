<?php

use App\Models\Post;
use App\Models\Biodata;
use Nette\Iterators\Mapper;
use PhpParser\Node\Stmt\If_;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Exception\RouteNotFoundException;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('kidam/home');
});

Route::get('/about', function () {
    return view('kidam/about');
});

Route::get('/siswa', function () {
    return view('kidam/siswa');
});

Route::get('/biodata', function () {
    return view('kidam/biodata');
});

Route::get('/hobi', function () {
    return view('kidam/hobi');
});

Route::get('/index', function () {
    return view('kidam/index');
});

Route::get('page/{page?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});

Route::get('user/{name?}', function ($nama = "Hello World") {
    return "<b>$nama</b>";
});

Route::get('pesan/{pesan?}/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = "",$minuman = "",$cemilan = "") {
    if ($makanan == "" && $minuman == "" && $cemilan == "") {
        $output = "Anda Tidak Memesan, Silahkan Pulang";
    }
            if ($makanan != "" ) {
            $output = "Anda Pesan Makan : $makanan <br>";
        }
        if ($makanan != "" && $minuman != "" ) {
            $output = "Anda Pesan Makan : $makanan<br>"
            . "Minum : $minuman <br>";
        }

        if ($makanan != "" && $minuman != "" && $cemilan != "") {
            $output = "Anda Pesan Makan : $makanan<br>"
            . "Minum : $minuman <br>"
            . "Cemilan : $cemilan";
}

    return "$output";
});

Route::get('profile', function () {
    $nama = "Kidam";
    return view('profile', compact('nama'));
});

Route::get('biodata', function () {
    $nama = "Kidam Kusnandi";
    $umur = 22;
    $alamat = "Citamiang Kidul";
    $sekolah = "SMK Assalaam Bandung";
    $kelas = "XII RPL 2";
    $hobi = "Bulutangkis";
    return view('biodata', compact('nama','umur','alamat','sekolah','kelas','hobi'));
});

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => "Lorem ipsum 1",'content' => 'Content Pertama'],
        ['id' => 2, 'title' => "Lorem ipsum 2",'content' => 'Content Kedua'],
        ['id' => 3, 'title' => "Lorem ipsum 3",'content' => 'Content Ketiga'],
    ];
    return view('blog', compact('posts'));
});

Route::get('data', function () {
    $posts = [
        [
            'id' => 1, 'name' => 'Ujang Ubed', 'username' => 'ujang ubed','email' => 'ujangubed@gmail.com',
            'alamat' => 'Bandung', 'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Fisika',
                'mapel3' => 'Kimia'
            ]
        ],
        [
            'id' => 2, 'name' => 'Kidam Kusnandi', 'username' => 'kidamZ','email' => 'kidamkusnandi@gmail.com',
            'alamat' => 'Bandung', 'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Fisika',
                'mapel3' => 'Bahasa Inggris'
            ]
        ],
        [
            'id' => 3, 'name' => 'Akbar Ginanjar', 'username' => 'akbarginanjarr','email' => 'akbarbabang@gmail.com',
            'alamat' => 'Bandung', 'mapel' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Kimia'
            ]
        ],
        [
            'id' => 4, 'name' => 'Priyadi Sentosa', 'username' => 'priyadisentosa','email' => 'priyadi@gmail.com',
            'alamat' => 'Bandung', 'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Indonesia'
            ]
        ],
        [
            'id' => 5, 'name' => 'Aldi Awaludin', 'username' => 'aldi abo','email' => 'aldiawaludin@gmail.com',
            'alamat' => 'Bandung', 'mapel' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Fisika',
                'mapel3' => 'Bahasa Inggris'
            ]
        ],
    ];
    return view('data', compact('posts'));
});

Route::get('/test-post', function () {
    $query = App\Models\Post::all();
    return view('test-posts', compact('query'));
});

Route::get('/biodata', function () {
    $query = App\Models\Biodata::all();
    return view('biodatas', compact('query'));
});
