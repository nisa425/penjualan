<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // fungsi utama
    public function index()
    {
        // memanggil fungsi lain
        $pelanggan = $this->dataPelanggan();
        return view('pelanggan.index', compact('pelanggan'));
    }

    // fungsi tambahan
    public function dataPelanggan()
    {
        $pelanggan = ['Ina', 'Ani', 'Ita', 'Indra'];
        return $pelanggan;
    }
}