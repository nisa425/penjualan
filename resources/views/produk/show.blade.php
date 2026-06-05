@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                {{-- Header --}}
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Detail Data Produk</h5>
                </div>

                {{-- Body --}}
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-3 fw-bold">Nama Produk</label>
                        <div class="col-sm-9">: {{ $produk->nama }}</div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 fw-bold">Kategori Produk</label>
                        <div class="col-sm-9">: {{ $produk->Kategori->nama ?? 'Tanpa Kategori' }}</div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 fw-bold">Qty Awal</label>
                        <div class="col-sm-9">: {{ $produk->qty }}</div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 fw-bold">Harga Jual</label>
                        <div class="col-sm-9">: {{ number_format($produk->harga_jual, 0, ',', '.') }}</div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 fw-bold">Harga Beli</label>
                        <div class="col-sm-9">: {{ number_format($produk->harga_beli, 0, ',', '.') }}</div>
                    </div>

                    <hr>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('produk.index') }}" class="btn btn-warning text-white fw-bold">
                            Data Produk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
