@extends('layouts.admin')

@section('content')

<div id="layoutSidenav_content">
    <main class="container-fluid px-4">
        <h1 class="mt-4">Tambah User</h1>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-user-plus me-1"></i>
                Form Tambah User
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <!-- Ganti '#' dengan action sesuai backend -->
                    <!-- CSRF token jika pakai Laravel -->

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="" disabled selected>Pilih Role</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan
                    </button>
                    <a href="{{ url('/indexuser') }}" class="btn btn-secondary ms-2">
                        <i class="fas fa-arrow-left me-1"></i> Kembali
                    </a>
                </form>
            </div>
        </div>
    </main>
</div>


@endsection
