@extends('layouts.admin')

@section('content')

    <div id="layoutSidenav_content">
    <main class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <div class="row mt-4 justify-content-center">
            <!-- USER Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="mb-0">USER</h4>
                            <div class="fs-5">0</div>
                        </div>
                        <i class="fas fa-address-book fa-3x"></i>
                    </div>
                </div>
            </div>
            <!-- KATEGORI Card -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-success text-white h-100">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="mb-0">PRODUK</h4>
                            <div class="fs-5">0</div>
                        </div>
                        <i class="fas fa-folder fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>



@endsection
