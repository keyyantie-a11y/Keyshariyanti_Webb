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
                        Data Pelanggan
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{ url('/pelanggan/create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-lg me-1"></i> Tambah Pelanggan
                            </a>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Pelanggan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pelanggans as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->No_Pelanggan }}</td>
                                        <td>{{ $item->Nama_Pelanggan }}</td>
                                        <td>{{ $item->Alamat }}</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">

                                                <a href="{{ url('pelanggan/edit/' . $item->PelangganID) }}"
                                                    class="btn btn-warning">
                                                    Edit
                                                </a>

                                                <form action="{{ url('pelanggan/delete/' . $item->PelangganID) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Tidak ada data pelanggan
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            {{ $pelanggans->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection