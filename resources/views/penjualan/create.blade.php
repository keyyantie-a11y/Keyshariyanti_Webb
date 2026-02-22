@extends('layouts.app')

@section('content')
    @include('includes.navbar')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-sm">
                    <div class="card-header">
                        Tambah Penjualan
                    </div>

                    <div class="card-body">

                        {{-- Error Validasi --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('penjualan.store') }}" method="POST">
                            @csrf

                            {{-- Faktur --}}
                            <div class="mb-3">
                                <label for="faktur" class="form-label">Faktur</label>
                                <input
                                    type="number"
                                    name="faktur"
                                    id="faktur"
                                    class="form-control"
                                    value="{{ old('faktur') }}"
                                    required
                                >
                            </div>

                            {{-- No Pelanggan --}}
                            <div class="mb-3">
                                <label for="NoPelanggan" class="form-label">No Pelanggan</label>
                                <select
                                    name="NoPelanggan"
                                    id="NoPelanggan"
                                    class="form-select"
                                    required
                                >
                                    <option value="">-- Pilih No Pelanggan --</option>
                                    @foreach ($pelanggans as $p)
                                        <option value="{{ $p->PelangganID }}"
                                            {{ old('NoPelanggan') == $p->PelangganID ? 'selected' : '' }}>
                                            {{ $p->PelangganID }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tanggal Penjualan --}}
                            <div class="mb-3">
                                <label for="TanggalPenjualan" class="form-label">
                                    Tanggal Penjualan
                                </label>
                                <input
                                    type="date"
                                    name="TanggalPenjualan"
                                    id="TanggalPenjualan"
                                    class="form-control"
                                    value="{{ old('TanggalPenjualan', date('Y-m-d')) }}"
                                    required
                                >
                            </div>

                            {{-- Tombol --}}
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>

                                <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
                                    Batal
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection