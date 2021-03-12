<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function pegawai(){
        return view('pegawai',['pegawais' => Pegawai::pegawai()]);
    }
}
