<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about-us',['abouts' => About::about()]);
    }
}
