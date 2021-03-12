<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Models\post;
=======

>>>>>>> 95da7125d92ca22ec160be0ed1ac163f4703015b
use Illuminate\Http\Request;

class IndexController extends Controller
{
<<<<<<< HEAD
    // public function index(){
    //     return view('index');
    // }
    public function post(){
        $post = post::all();
        return view('index',['data' =>$post]);
}
=======
    public function index(){
        return view('index');
    }
>>>>>>> 95da7125d92ca22ec160be0ed1ac163f4703015b
}
