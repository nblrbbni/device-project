@extends("layout.master")
@section("judul")
Halaman Create Kategori
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
              Buat Kategori
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
            <form action="/kategori" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label>Nama Kategori</label>
                  <input type="text" name="nama_kategori" class="form-control" >
                </div>
                @error('nama_kategori')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <div class="mb-3">
                  <label for="icon" class="form-label">Icon</label>

                  <input type="text" class="form-control" name="icon" id="icon">
                  
                </div>
                @error('icon')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn" style="background-color:#18244c; color:white">Submit</button>
            <a href="/kategori" class="btn btn-primary">Back</a>
              </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
