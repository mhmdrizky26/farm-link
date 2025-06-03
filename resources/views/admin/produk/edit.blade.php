@extends('layouts.admin')

@section('content')

<div id="layoutSidenav_content">
    <main class="container-fluid px-4">
        <h1 class="mt-4">Edit Produk</h1>

        <div class="card mb-4">
            <div class="card-header bg-warning text-white">
                <i class="fas fa-edit me-1"></i>
                Form Edit Produk
            </div>
            <div class="card-body">
                <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $produk->nama) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        @if ($produk->gambar)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar Produk" style="max-height: 150px;">
                            </div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga (Rp)</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="{{ old('stok', $produk->stok) }}" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save me-1"></i> Perbarui
                    </button>
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary ms-2">
                        <i class="fas fa-arrow-left me-1"></i> Kembali
                    </a>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection
