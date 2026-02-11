@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Tambah Pelanggan</div>

                <div class="card-body">
                    <form action="{{ route('pelanggan.store') }}" method="POST">
                        @csrf

                         <div class="mb-3">
                            <label>Kode Pelanggan</label>
                            <input type="text" name="No_Pelanggan" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Nama Pelanggan</label>
                            <input type="text" name="Nama_Pelanggan" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="Alamat" class="form-control" rows="3"></textarea>
                        </div>

                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
