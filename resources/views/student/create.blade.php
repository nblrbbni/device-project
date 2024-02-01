@extends('layout.master')

@section('judul')
Data Siswa
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
{{-- <link rel="stylesheet" href="{{ asset('style/style.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('js/java.js') }}">
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
              Lihat Data Siswa
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
            <form action="/student" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Nama Siswa</label>
                  <input type="text" name="name" class="form-control">
                </div>
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="quantity">Kelas</label>
                  <input type="number" id="quantity" class="form-control" name="class" min="10" max="12">
                </div>
                @error('class')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn" style="background-color:#18244c; color:white">Submit</button>
                <a href="/student" class="btn btn-primary">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
