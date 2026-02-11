@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Tambah Barang</div>

                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Kode Barang</label>
                            <input type="text" name="Kode_Barang" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Nama Barang</label>
                            <input type="text" name="Nama_Barang" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Harga Barang</label>
                            <textarea name="Harga_Barang" class="form-control" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>