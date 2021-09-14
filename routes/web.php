<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Models\Produk;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("/kategori",KategoriController::class);
Route::resource("/product",ProductController::class);
Route::get("/transaksi",[TransaksiController::class,'list'])->name("transaksi.index");
Route::get("/transaksi/approve/{id}",[TransaksiController::class,'approve'])->name("transaksi.approve");