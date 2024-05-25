@extends('layout.app')
@section('content')

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('pengiriman.index') }}">Pengiriman</a></li>
      <li class="breadcrumb-item active">Edit Data Pengiriman</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <form action="{{ route('pengiriman.update', $pengiriman->id_pengiriman) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="id_pengiriman" class="form-label">ID Pengiriman</label>
        <input type="text" class="form-control" id="id_pengiriman" name="id_pengiriman" value="{{ $pengiriman->id_pengiriman }}">
      </div>
      <div class="mb-3">
        <label for="id_kurir" class="form-label">Nama Kurir</label>
        <select name="id_kurir" id="id_kurir" class="form-control">
          <option value="" selected disabled hidden>--Pilih Kurir--</option>
          @foreach($kurir as $item)
          <option value="{{ $item->id_kurir }}">{{ $item->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $pengiriman->tanggal }}">
      </div>
      <div class="mb-3">
        <label for="ekspedisi" class="form-label">Ekspedisi</label>
        <input type="text" class="form-control" id="ekspedisi" name="ekspedisi" value="{{ $pengiriman->ekspedisi }}">
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $pengiriman->status }}">
      </div>
      <div class="mb-3 text-right">
        <a href="{{ route('pengiriman.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection