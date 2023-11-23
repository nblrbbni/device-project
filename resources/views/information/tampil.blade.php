@extends('layout.master')

@section('judul')
Information
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="stylesheet" href="{{ asset('js/java.js') }}">
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@section('content')
<br>
<br>
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
          <h1>Halaman Tambah</h1>
          <a href="/information/create" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordion-example">
                    @forelse ($information as $key => $value )
                    <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false">
                                    Pasal {{ $value->nama_pasal }}
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse " data-bs-parent="#accordion-example" >
                                <div class="accordion-body pt-0">
                                    {{ $value->descripsi }}
                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false">
                                Tidak ada data
                            </button>
                        </h2>
                    </div>
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
