@extends('layouts.admin')

@section('content')

<div id="layoutSidenav_content">
    <main class="container-fluid px-4">
        <h1 class="mt-4">Daftar Produk</h1>
        <div class="mb-3">
            <a href="{{ url('/createproduk') }}" class="btn btn-primary">
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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data statis -->
                            <tr>
                                <td>1</td>
                                <td>Padi</td>
                                <td>25.000 / kg</td>
                                <td>200 kg</td>
                                <td>Bibit Padi</td>
                                <td>
                                    <a href="{{ url('/editproduk') }}" class="btn btn-sm btn-info text-white">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                            <!-- Tambahkan baris lain secara dinamis -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
