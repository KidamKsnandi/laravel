<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    public $table = "pembelian";
    protected $fillable = ['nama_barang', 'nama_suplier', 'qty', 'tgl'];
}
