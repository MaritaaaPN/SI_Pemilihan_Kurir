@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pengiriman</li>
        <li class="breadcrumb-item"><a href="{{ route('Admin') }}"></a>Data Pengiriman</li>
        <li class="breadcrumb-item active">Detail Data Pengiriman</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertpengiriman') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_pengiriman" class="form-label">ID Pengiriman</label>
            <input type="text" class="form-control" id="id_pengiriman" name="id_pengiriman">
          </div>
          <div class="col-12">
            <label for="id_kurir" class="form-label">Nama Kurir</label>
            <input type="text" class="form-control" id="id_kurir" name="id_kurir">
          </div>
          <div class="col-12">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="col-12">
            <label for="ekspedisi" class="form-label">Ekspedisi</label>
            <input type="text" class="form-control" id="ekspedisi" name="ekspedisi">
          </div>
          <div class="col-12">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status">
          </div>

        </form>
      </div>
    </div>
@endsection