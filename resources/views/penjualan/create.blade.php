@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{ route('penjualan.store') }}" method="POST">
                        @csrf

                        <input type="number" name="faktur" class="form-control">

                        <select name="NoPelanggan" class="form-control">
                            @foreach($pelanggans as $p)
                                <option value="{{ $p->PelangganID }}">
                                    {{ $p->NamaPelanggan }}
                                </option>
                            @endforeach
                        </select>

                        <input type="date" name="TanggalPenjualan" class="form-control" value="{{ date('Y-m-d') }}">

                        <button class="btn btn-primary">Simpan</button>
                    </form>