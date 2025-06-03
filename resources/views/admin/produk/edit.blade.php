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
                <form action="#" method="POST">
                    <!-- Ganti "#" dengan route update -->
                    <!-- Laravel: pakai @csrf dan @method('PUT') -->

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="Produk Lama" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga (Rp)</label>
                        <input type="number" class="form-control" id="harga" name="harga" value="100000" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="stok" name="stok" value="10" required min="0">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">Deskripsi produk lama...</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save me-1"></i> Perbarui
                    </button>
                    <a href="{{ url('/indexproduk') }}" class="btn btn-secondary ms-2">
                        <i class="fas fa-arrow-left me-1"></i> Kembali
                    </a>
                </form>
            </div>
        </div>
    </main>
</div>


@endsection
