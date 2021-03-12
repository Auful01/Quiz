<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/fat', [PostController::class, 'index']);
Route::get ( '/barang' , [ BarangController::class, 'barang' ])->name('index.barang');
Route::get ( '/pelanggan' , [ PelangganController::class, 'pelanggan' ])->name('index.pelanggan');
