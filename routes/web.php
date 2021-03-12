<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [PostController::class, 'index']);
// Route::get('posts/{slug}', [PostController::class, 'show'])
//     ->name('posts.show');

// Route::get('/fat', [PostController::class, 'index']);

Route::get('/pegawai',[PegawaiController::class,'pegawai'])->name('index.pegawai');
Route::get('/supplier',[SupplierController::class,'supplier'])->name('index.supplier');
Route::get('/barang',[BarangController::class,'barang'])->name('index.barang');
Route::get ('/pelanggan' ,[PelangganController::class, 'pelanggan'])->name('index.pelanggan');


Route::get('/about', [AboutController::class, 'about'])->name('index.about');
Route::get('/blog', [BlogController::class, 'blog'])->name('index.blog');
Route::resource('contact', ContactController::class);
Route::get('/', [HomeController::class,'index'])->name('index.home');
