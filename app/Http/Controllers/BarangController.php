<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Pesanan;
use App\Models\Suplier;
use App\Models\Pembelian;
use Illuminate\Routing\Controller;

class BarangController extends Controller
{
    public function index() {
        $data = Post::all();
        return view('test-posts', compact('data'));
    }

    public function barang() {
        $data = Barang::all();
        return view('barang/barang', compact('data'));
    }

    public function pembeli() {
        $data = Pembeli::all();
        return view('barang/pembeli', compact('data'));
    }

    public function suplier() {
        $data = Suplier::all();
        return view('barang/suplier', compact('data'));
    }

    public function pesanan() {
        $data = Pesanan::all();
        return view('barang/pesanan', compact('data'));
    }

    public function pembelian() {
        $data = Pembelian::all();
        return view('barang/pembelian', compact('data'));
    }
}
