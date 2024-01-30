@extends('layout.master')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
{{-- <link rel="stylesheet" href="{{ asset('style/style.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@push('scripts')
<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script defer src="{{ asset('js/scripts.js') }}"></script>
@endpush

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Perbarui Data Laptop
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
            <form action="/datalaptop/{{$datalaptop->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Kode Device</label>
                  <input type="text" name="kode_device" value="{{ $datalaptop->kode_device }}" class="form-control" required>
                </div>
                @error('kode_device')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label class="form-label">Nama Device</label>
                  <input type="text" name="nama" value="{{ $datalaptop->nama }}" class="form-control" required>
                </div>
                @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label class="form-label">Merk Device</label>
                  <input type="text" name="merk" value="{{ $datalaptop->merk }}" class="form-control" required>
                </div>
                @error('merk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button class="btn submit" style="background-color:#18244c; color:white" onclick="submitForm(event)">Submit</button>
                <a href="/datalaptop" class="btn btn-primary">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
