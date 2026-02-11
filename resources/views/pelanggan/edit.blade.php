@extends('layouts.app')
@section('content')
@include('includes.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Edit Pelanggan</div>
                <div class="card-body">

                    <form action="{{ url('pelanggan/update/'.$pelanggan->PelangganID) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label>No Pelanggan</label>
                            <input type="text"
                                   name="No_Pelanggan"
                                   class="form-control"
                                   value="{{ old('No_Pelanggan', $pelanggan->No_Pelanggan) }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Pelanggan</label>
                            <input type="text"
                                   class="form-control"
                                   name="Nama_Pelanggan"
                                   value="{{ old('Nama_Pelanggan', $pelanggan->Nama_Pelanggan) }}">
                        </div>

                        <div class="form-group mb-3">
                            <label>Alamat</label>
                            <textarea name="Alamat"
                                      class="form-control"
                                      rows="3">{{ old('Alamat', $pelanggan->Alamat) }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
