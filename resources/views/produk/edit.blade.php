@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="card shadow-sm">

                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Edit Data Produk</h5>
                </div>

                <div class="card-body">

                    <form action="{{ route('produk.update', $produk->id) }}" method="POST">

                        @csrf
                        @method('PUT')

                        {{-- NAMA --}}
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label fw-bold">Nama Produk</label>

                            <div class="col-md-10">
                                <input type="text"
                                       name="nama"
                                       class="form-control"
                                       value="{{ $produk->nama }}"
                                       required>
                            </div>
                        </div>

                        {{-- KATEGORI --}}
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label fw-bold">Kategori</label>

                            <div class="col-md-10">

                                <select name="kategori" class="form-control" required>

                                    <option value="">-- Pilih Kategori --</option>

                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}"
                                            {{ $produk->id_kategori == $k->id ? 'selected' : '' }}>
                                            {{ $k->nama }}
                                        </option>
                                    @endforeach

                                </select>

                            </div>
                        </div>

                        {{-- QTY --}}
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label fw-bold">Qty</label>
                            <div class="col-md-10">
                                <input type="number"
                                       name="qty"
                                       class="form-control"
                                       value="{{ $produk->qty }}"
                                       required>
                            </div>
                        </div>

                        {{-- HARGA BELI --}}
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label fw-bold">Harga Beli</label>
                            <div class="col-md-10">
                                <input type="number"
                                       name="beli"
                                       class="form-control"
                                       value="{{ $produk->harga_beli }}"
                                       required>
                            </div>
                        </div>

                        {{-- HARGA JUAL --}}
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label fw-bold">Harga Jual</label>
                            <div class="col-md-10">
                                <input type="number"
                                       name="jual"
                                       class="form-control"
                                       value="{{ $produk->harga_jual }}"
                                       required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10 offset-md-2">

                                <button type="submit" class="btn btn-primary">
                                    Update Data
                                </button>

                                <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                                    Kembali
                                </a>

                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection