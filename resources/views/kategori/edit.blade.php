@extends("layout.master")
@section("judul")
Halaman Edit Kategori
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
              Edit Kategori
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
            <form action="/kategori/{{ $kategori->id }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                  <label>Nama Kategori</label>
                  <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}">

                </div>
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
                <div class="mb-3">
                  <label >Icon</label>
                  <input type="text" class="form-control" name="icon" value="{{ $kategori->icon }}">
                </div>
                @error('deskripsi')
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
