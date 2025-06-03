@extends('layouts.admin')

@section('content')

<div id="layoutSidenav_content">
    <main class="container-fluid px-4">
        <h1 class="mt-4">Daftar Produk</h1>
        <div class="mb-3">
            <a href="{{ route('produk.create') }}" class="btn btn-primary">
                <i class="fas fa-box"></i> Tambah Produk
            </a>
        </div>
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-table me-1"></i>
                Data Produk
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $index => $produk)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                                    <td>{{ $produk->stok }}</td>
                                    <td>{{ $produk->deskripsi }}</td>
                                    <td>
                                        @if ($produk->gambar)
                                            <img src="{{ Storage::url('public/' . $produk->gambar) }}" alt="Gambar {{ $produk->nama }}" width="100">
                                        @else
                                            Tidak ada gambar
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-info text-white">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus produk ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
