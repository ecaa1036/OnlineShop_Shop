<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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

Route::get('template', function () {
    return view('template');
});

Route::get('tampilan', function () {
    return view('tampilan');
});

Route::get('login', function () {
    return view('login');
})->name('login');

// user
Route::post('login/auth', [UserController::class,'auth']);
Route::get('register', [UserController::class,'daftar']);
Route::post('daftar/create', [UserController::class,'create']);
Route::get('logout', [UserController::class,'logout']);

// Route::get('template', [ProdukController::class,'template']);
Route::get('tampilan', [ProdukController::class,'tampilan']);

Route::get('produk', [ProdukController::class, 'show']);
Route::get('produk/add', [ProdukController::class, 'add']);
Route::post('produk/create', [ProdukController::class, 'create']);
Route::get('produk/hapus/{id_produk}', [ProdukController::class, 'hapus']);
Route::get('produk/edit/{id_produk}', [ProdukController::class, 'edit']);
Route::post('produk/update/{id_produk}', [ProdukController::class, 'update']);
Route::get('produk/cari', [ProdukController::class, 'cari']);

Route::get('home', [HomeController::class, 'show']);
Route::get('home/card/{kdproduk}', [HomeController::class, 'card']);