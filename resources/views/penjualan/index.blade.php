@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <div class="card">
                <div class="card-header">
                    Data Penjualan
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ url('/penjualan/create') }}" class="btn btn-primary">
                            Tambah Penjualan
                        </a>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Faktur</th>
                                <th>No Pelanggan</th>
                                <th>Tanggal Penjualan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($penjualans as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->faktur }}</td>
                                <td>{{ $item->NoPelanggan }}</td>
                                <td>{{ $item->TanggalPenjualan }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">

                                        <a href="{{ route('penjualan.edit', $item->PenjualanID) }}"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>


                                        <form action="{{ route('penjualan.destroy', $item->PenjualanID) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('Yakin mau dihapus?')"
                                                class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </form>


                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Tidak ada data penjualan
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $penjualans->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection