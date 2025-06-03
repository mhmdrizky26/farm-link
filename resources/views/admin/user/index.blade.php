@extends('layouts.admin')

@section('content')

<div id="layoutSidenav_content">
    <main class="container-fluid px-4">
        <h1 class="mt-4">Daftar User</h1>
        <div class="mb-3">
            <a href="{{ url('/createuser') }}" class="btn btn-primary">
                <i class="fas fa-user-plus me-1"></i> Tambah User
            </a>
        </div>
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-table me-1"></i>
                Data User
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data statis -->
                            <tr>
                                <td>1</td>
                                <td>Asep Suhendar</td>
                                <td>asep@example.com</td>
                                <td>Admin</td>
                                <td>
                                    <a href="{{ url('/edituser') }}" class="btn btn-sm btn-info text-white">
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
