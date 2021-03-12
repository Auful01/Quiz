<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan(){
        return view('layouts.pelanggan',['pelanggans' => Pelanggan::pelanggan()]);
    }
}
