<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();

        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aturan = [
            'nama'     => 'required',
            'kategori' => 'required',
            'qty'      => 'required|numeric',
            'beli'     => 'required|numeric',
            'jual'     => 'required|numeric',
        ];

        $pesan = [
            'required' => 'Data ini wajib diisi!',
            'numeric'  => 'Mohon isi dengan angka!'
        ];

        $request->validate($aturan, $pesan);

        Produk::create([
            'nama'        => $request->nama,
            'id_kategori' => $request->kategori,
            'qty'         => $request->qty,
            'harga_beli'  => $request->beli,
            'harga_jual'  => $request->jual,
        ]);

        return redirect()
            ->route('produk.index')
            ->with('success', 'Data produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();

        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'qty' => 'required|numeric',
            'beli' => 'required|numeric',
            'jual' => 'required|numeric',
        ]);

        $produk = Produk::findOrFail($id);

        $produk->update([
            'nama' => $request->nama,
            'id_kategori' => $request->kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->beli,
            'harga_jual' => $request->jual,
        ]);

        return redirect()->route('produk.index')
            ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();

        return redirect()
            ->route('produk.index')
            ->with('success', 'Data produk berhasil dihapus');
    }
}