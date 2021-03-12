<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class FatAbtController extends Controller
{
    public function index()
    {
        $abouts = About::where('draft', false)
            ->orderBy('id','desc')
            ->paginate(3);
        return view('about-us', ['abouts' => $abouts]);
    }
}
