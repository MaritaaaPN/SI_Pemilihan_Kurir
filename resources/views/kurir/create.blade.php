@extends('layout.app')
@section('content')

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('kurir.index') }}">Kurir</a></li>
      <li class="breadcrumb-item active">Tambah Data Kurir</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <form action="{{ route('kurir.store') }}" method="POST">
      @csrf
      <!-- <div class="mb-3">
        <label for="id_kurir" class="form-label">ID Kurir </label>
        <input type="text" class="form-control" id="id_kurir" name="id_kurir">
      </div> -->
      <div class="mb-3">
        <label for="nama" class="form-label">Nama </label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat </label>
        <input type="text" class="form-control" id="alamat" name="alamat">
      </div>
      <div class="mb-3">
        <label for="no_telepon" class="form-label">No Telepon </label>
        <input type="text" class="form-control" id="no_telepon" name="no_telepon">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3 text-right">
        <a href="{{ route('kurir.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection