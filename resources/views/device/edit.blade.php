@extends("layout.master")
@section("judul")
Halaman Edit Device
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
            <form action="/device/{{ $device->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                  <label>Nama Device</label>
                  <input type="text" name="nama_perangkat" class="form-control" value="{{ $device->nama_perangkat }}">

                </div>
                @error('nama_perangkat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <div class="mb-3">
                  <label >Kondisi</label>
                  <input type="text" class="form-control" name="kondisi_perangkat" value="{{ $device->kondisi_perangkat }}">
                </div>
                @error('kondisi_perangkat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="{{ $device->stok }}">

              </div>
              @error('stok')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
                <label>Device Id</label>
                <input type="text" name="device_id" class="form-control" value="{{ $device->device_id }}">

              </div>
              @error('stok')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
