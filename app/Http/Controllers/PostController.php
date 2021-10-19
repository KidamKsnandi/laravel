<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Pesanan;
use App\Models\Suplier;
use App\Models\Pembelian;
use Illuminate\Routing\Controller;


class PostController extends Controller
{
    public function index() {
        $data = Post::all();
        return view('test-posts', compact('data'));
    }

}
