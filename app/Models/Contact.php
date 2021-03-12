<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public static function contact()
    {
        $contacs = Contact::where('draft', false)
                    ->paginate(2);

        return $contacs;
    }
}
