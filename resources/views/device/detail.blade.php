@extends("layout.master")
@section("judul")
Detail Device
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="stylesheet" href="{{ asset('js/java.js') }}">
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush
@section("content")


<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Peraturan Peminjaman Device
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="card">
          <div class="card-body">
            <h1>{{ $device->nama_perangkat }}</h1>
            <p>{{ $device->kondisi_perangkat}}</p>
            <p>{{ $device->stok }}</p>
            <p>{{ $device->device_id }}</p>
            <a href="/device" class="btn btn-secondary btn-sm">Kembali</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
