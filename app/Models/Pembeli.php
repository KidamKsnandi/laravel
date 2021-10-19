<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    public $table = "pembeli";
    protected $fillable = ['nama', 'jns_kelamin', 'alamat', 'kode_pos', 'kota', 'tgl_lahir'];
}
