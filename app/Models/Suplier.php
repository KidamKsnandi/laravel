<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;
    public $table = "suplier";
    protected $fillable = ['nama', 'alamat', 'kode_pos', 'kota'];
}
