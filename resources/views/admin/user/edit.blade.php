@extends('layouts.admin')

@section('content')

<div id="layoutSidenav_content">
    <main class="container-fluid px-4">
        <h1 class="mt-4">Edit User</h1>

        <div class="card mb-4">
            <div class="card-header bg-warning text-white">
                <i class="fas fa-user-edit me-1"></i>
                Form Edit User
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <!-- Ganti '#' dengan action update -->
                    {{-- <!-- Tambahkan @method('PUT') jika pakai Laravel --> --}}
                    {{-- <!-- Tambahkan @csrf juga --> --}}

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="Nama Lama" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="email@lama.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="Admin" selected>Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password (kosongkan jika tidak diubah)</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" class="btn btn-warning text-white">
                        <i class="fas fa-save me-1"></i> Perbarui
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
