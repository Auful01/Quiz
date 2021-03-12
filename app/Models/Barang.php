<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public static function barang()
    {
        $barangs = Barang::where('nama_barang', false)
            ->orderBy('qty')
            ->paginate(10);
        return $barangs;
    }
}
