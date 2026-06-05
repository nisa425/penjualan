<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return "Welcome";
});

Route::get('/show/{id?}', function ($id = 1) {
    return "Nilai Parameter Adalah " . $id;
});

Route::get('/edit/{nama}', function ($nama) {
    return "Nilai Parameter Adalah " . $nama;
})->where('nama', '[A-Za-z]+');

Route::get('/index', function () {
    return "<a href='" . route('create') . "'>Akses Route dengan nama</a>";
});

Route::get('/create', function () {
    return "Route diakses menggunakan nama";
})->name('create');


Route::resource('produk', ProdukController::class);


Route::get('/halaman', function () {

    $title = 'Harry Potter';

    $konten = 'Harry Potter and the Deathly Hallows: Part 2';

    return view('konten.halaman', compact('title', 'konten'));

});


Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/update', [KategoriController::class, 'update']);
Route::get('/kategori/delete', [KategoriController::class, 'delete']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');