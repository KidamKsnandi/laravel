<?php

use Illuminate\Support\Facades\Route;

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