<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    public static function pelanggan()
 {
     return Pelanggan::where('nama_pelanggan', false)
         ->orderBy('alamat')
         ->paginate(10);
 }
}
