<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route ::get('/greeting', function (){
    return 'Selamat Datang di 12 RPL B';
});

//Menampilkan halaman biodata dari biodata.blade.php
Route ::get('/biodata', function (){
    return view('biodata',[
        'nama' => 'Shiroko',
        'alamat' => 'Abydos',
        'hobi' => 'Bersepeda'
    ]);
});
Route ::get('/penjumlahan', function (){
    return 4*4;
});

//menampilkan tampilan login
Route::get('/login', [LoginController::class, 'index']);
//untuk cek login
Route::post('/login', [LoginController::class, 'cek_login']);

//Untuk logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [LoginController::class, 'dashboard']);
//Memanggil halaman admin - home
Route::get('/admin/home', [AdminController::class, 'index']);

//untuk memanggil halaman admin - Kategori
Route::get('/admin/kategori', [KategoriController::class, 'index']);

//menyimpan data kategori
Route::post('/tambah_kategori', [KategoriController::class, 'store']);

// update data kategori
Route::put('/edit_kategori/{id}', [KategoriController::class, 'update'])->name('edit_kategori');

//untuk memanggil halaman admin - Kategori
Route::get('/admin/products', [ProductsController::class, 'index']);

//menyimpan data kategori
Route::post('/tambah_products', [ProductsController::class, 'store']);

