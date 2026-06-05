@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Tambah Data Produk</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('produk.store') }}" method="POST">
                        @csrf

                        {{-- NAMA PRODUK --}}
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- KATEGORI (SESUAI MODUL: DROPDOWN) --}}
                        <div class="mb-3">
                            <label class="form-label">Kategori Produk</label>

                            <select class="form-control" name="kategori">
                                <option value="">-- Pilih Kategori --</option>

                                @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}">
                                        {{ $k->nama }}
                                    </option>
                                @endforeach
                            </select>

                            @error('kategori')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- QTY --}}
                        <div class="mb-3">
                            <label class="form-label">Qty Awal</label>
                            <input type="number" class="form-control" name="qty" value="{{ old('qty') }}">
                            @error('qty')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- HARGA JUAL --}}
                        <div class="mb-3">
                            <label class="form-label">Harga Jual</label>
                            <input type="number" class="form-control" name="jual" value="{{ old('jual') }}">
                            @error('jual')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- HARGA BELI --}}
                        <div class="mb-4">
                            <label class="form-label">Harga Beli</label>
                            <input type="number" class="form-control" name="beli" value="{{ old('beli') }}">
                            @error('beli')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- BUTTON --}}
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>

                            <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection