@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card shadow-sm">

                <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                    <a href="{{ route('produk.create') }}" class="btn btn-primary">
                        Tambah Produk
                    </a>

                    <h5 class="mb-0 text-muted">Data Produk</h5>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Qty</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Dibuat Pada</th>
                                    <th>Diedit Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($produk as $i => $p)
                                <tr>
                                    <td>{{ $i + 1 }}</td>

                                    <td>{{ $p->nama }}</td>

                                    {{-- FIX RELASI KATEGORI --}}
                                    <td>
                                        {{ $p->kategori->nama ?? 'Tanpa Kategori' }}
                                    </td>

                                    <td>{{ $p->qty }}</td>

                                    <td>{{ number_format($p->harga_beli, 0, ',', '.') }}</td>

                                    <td>{{ number_format($p->harga_jual, 0, ',', '.') }}</td>

                                    <td>
                                        {{ $p->created_at ? $p->created_at->format('d/m/Y') : '-' }}
                                    </td>

                                    <td>
                                        @if($p->updated_at)
                                            {{ $p->updated_at->format('d/m/Y') }} <br>
                                            {{ $p->updated_at->format('H:i:s') }}
                                        @else
                                            -
                                        @endif
                                    </td>

                                    <td>
                                        <div class="d-flex gap-1">

                                            <a href="{{ route('produk.show', $p->id) }}"
                                               class="btn btn-sm btn-warning text-white">
                                                Detail
                                            </a>

                                            <a href="{{ route('produk.edit', $p->id) }}"
                                               class="btn btn-sm btn-success">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                  action="{{ route('produk.destroy', $p->id) }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm" type="submit">
                                                    Hapus
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted py-4">
                                        Data produk masih kosong.
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection