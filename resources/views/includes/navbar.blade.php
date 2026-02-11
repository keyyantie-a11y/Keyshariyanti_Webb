<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
    <div class="container-fluid">
        <!-- Brand / Dashboard -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard</a>

        <!-- Toggler untuk mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Barang -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                </li>
                <!-- Pelanggan -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelanggan.index') }}">Pelanggan</a>
                </li>
                <!-- Penjualan -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('penjualan.index') }}">Penjualan</a>
                </li>
            </ul>

          
        </div>
    </div>
</nav>
