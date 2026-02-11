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
                        Data Barang
                    </div>

                    <div class="card-body">

                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ url('/barang/create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Tambah Barang
                            </a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($barangs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Kode_Barang }}</td>
                                        <td>{{ $item->Nama_Barang }}</td>
                                        <td>{{ $item->Harga_Barang }}</td>
                                        <td class="text-center">

                                            <a href="{{ url('barang/edit/' . $item->BarangID) }}"
                                               class="btn btn-warning">Edit
                                            </a>

                                            <form action="{{ url('barang/delete/' . $item->BarangID) }}"
                                                  method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                               <button class="btn btn-danger">Delete</button>
                                                
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Tidak ada data produk
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            {{ $barangs->links() }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection