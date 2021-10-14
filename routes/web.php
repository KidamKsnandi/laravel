<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\If_;
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



