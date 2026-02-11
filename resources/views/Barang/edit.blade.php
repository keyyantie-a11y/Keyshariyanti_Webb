@extends('layouts.app')
@section('content')
@include('includes.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Edit Barang</div>
                <div class="card-body">

                    <form action="{{ url('barang/update/'.$barang->BarangID) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label>Kode Barang</label>
                            <input type="text"
                                   class="form-control"
                                   name="Kode_Barang"
                                   value="{{ old('Kode_Barang', $barang->Kode_Barang) }}">
                        </div>

                        <div class="form-group mb-3">
                            <label>Nama Barang</label>
                            <textarea name="Nama_Barang"
                                      class="form-control"
                                      rows="3">{{ old('Nama_Barang', $barang->Nama_Barang) }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Harga Barang</label>
                            <input type="text"
                                   name="Harga_Barang"
                                   class="form-control"
                                   value="{{ old('Harga_Barang', $barang->Harga_Barang) }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection