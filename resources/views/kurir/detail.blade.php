@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Kurir</li>
        <li class="breadcrumb-item"><a href="{{ route('Admin') }}"></a>Data Kurir</li>
        <li class="breadcrumb-item active">Detail Data Kurir</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertKurir') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="id_kurir" class="form-label">ID Kurir</label>
        <input type="text" class="form-control" id="id_kurir" name="id_kurir">
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama </label>
        <input type="text" class="form-control" id="nama " name="nama ">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat </label>
        <input type="text" class="form-control" id="alamat " name="alamat ">
      </div>
      <div class="mb-3">
        <label for="no_telepon" class="form-label">No Telepon </label>
        <input type="text" class="form-control" id="no_telepon " name="no_telepon ">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="text" class="form-control" id="email " name="email ">
      </div>

        </form>
      </div>
    </div>
@endsection