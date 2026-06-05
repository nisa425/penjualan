<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_produk = kategori::all();
        return view('kategori.index', compact('kategori_produk'));
    }
    public function store()
    {
    // Cara 1: biasa
    $kategori = new Kategori;
    $kategori->kategori = 'Alat Dapur';
    $kategori->keterangan = 'Alat Dapur 1';
    $kategori->save();

    // Cara 2: mass assignment
    Kategori::create([
        'kategori' => 'Bahan Bangunan',
        'keterangan' => 'Bahan Bangunan Atas',
    ]);

    return "Menambah data dengan Eloquent berhasil !!";
    }
    public function update()
    {
    // update data dengan Eloquent ORM biasa
    // $kategori = Kategori::where('id', 3)->first();
    // $kategori->kategori = 'Bahan bahan bangunan';
    // $kategori->keterangan = 'Bahan Bangunan Bagian Atas';
    // $kategori->save();

    // update data dengan Eloquent ORM Mass Assignment
    Kategori::where('id', 2)->update([
        'kategori' => 'Alat-alat dapur',
    ]);

    return redirect('/kategori');  
    }
    public function delete()
{
    // $kategori = Kategori::where('id', 1)->first();
    // $kategori->delete();

    // cara 2: langsung (lebih singkat)
    Kategori::where('id', 2)->delete();

    return redirect('/kategori');
}
}


