@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container mt-4">

    <!-- Header -->
    <div class="row mb-4">
        <div class="col text-center">
            <h2 class="fw-bold">
                <i class="bi bi-house-door me-2"></i>
                Selamat Datang
            </h2>
            <p class="text-muted">
                Sistem Informasi Kasir
            </p>
        </div>
    </div>

    <!-- Info Cards -->
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="text-primary">
                        <i class="bi bi-box-seam me-1"></i>
                        Barang
                    </h5>
                    <h3 class="fw-bold">Manajemen Barang</h3>
                    <p class="text-muted mb-0">
                        Tambah, edit, dan hapus barang
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="text-success">
                        <i class="bi bi-people me-1"></i>
                        Pelanggan
                    </h5>
                    <h3 class="fw-bold">Data Pelanggan</h3>
                    <p class="text-muted mb-0">
                        Kelola data pelanggan
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="text-warning">
                        <i class="bi bi-receipt me-1"></i>
                        Penjualan
                    </h5>
                    <h3 class="fw-bold">Transaksi</h3>
                    <p class="text-muted mb-0">
                        Proses transaksi penjualan
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Info Box -->
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="alert alert-info text-center shadow-sm">
                <i class="bi bi-info-circle me-2"></i>
                Gunakan menu navigasi di atas untuk mengelola data kasir
            </div>
        </div>
    </div>

</div>
@endsection