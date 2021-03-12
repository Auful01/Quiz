<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class FatIdxController extends Controller
{
    public function index()
    {
        $homes = Home::where('draft', false)
            ->orderBy('id','desc')
            ->paginate(5);
        return view('index', ['homes' => $homes]);
    }
}

