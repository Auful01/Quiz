<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){
        $post = post::all();
        return view('index',['data' =>$post]);
}
}
