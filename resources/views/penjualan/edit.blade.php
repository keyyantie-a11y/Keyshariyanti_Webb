@extends('layouts.app')
@section('content')
@include('includes.navbar')

<div class="container mt-4">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card shadow-sm">
<div class="card-header">
Edit Penjualan
</div>

<div class="card-body">

{{-- error validasi --}}
@if ($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('penjualan.update',$penjualan->PenjualanID) }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Faktur</label>
<input type="number"
name="faktur"
class="form-control"
value="{{ old('faktur',$penjualan->faktur) }}"
required>
</div>

<div class="mb-3">
<label class="form-label">No Pelanggan</label>
<input type="number"
name="NoPelanggan"
class="form-control"
value="{{ old('NoPelanggan',$penjualan->NoPelanggan) }}"
required>
</div>

<div class="mb-3">
<label class="form-label">Tanggal Penjualan</label>
<input type="date"
name="TanggalPenjualan"
class="form-control"
value="{{ old('TanggalPenjualan',$penjualan->TanggalPenjualan) }}"
required>
</div>

<div class="d-flex gap-2">
<button type="submit" class="btn btn-primary">
Update
</button>

<a href="{{ route('penjualan.index') }}"
class="btn btn-secondary">
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