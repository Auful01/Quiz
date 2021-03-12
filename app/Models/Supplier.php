<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public static function supplier()
    {
        $suppliers = Supplier::where('draft', false)
                    ->paginate(10);
        return $suppliers;

    }
}
