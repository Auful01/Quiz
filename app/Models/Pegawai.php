<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    public static function pegawai()
    {
        $pegawais = Pegawai::where('draft',false)
                    ->paginate(10);
        return $pegawais;
    }
}
