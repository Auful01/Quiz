<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier()
    {
        return view('supplier',['suppliers' => Supplier::supplier()]);
    }
}
