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
        <div class="card">
          <div class="card-body">
            <div class="accordion" id="accordion-example">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false">
                    Pasal 1
                  </button>
                </h2>
                <div id="collapse-1" class="accordion-collapse collapse " data-bs-parent="#accordion-example" >
                  <div class="accordion-body pt-0">
                    Bagi siswa-siswa SMK TI BAZMA yang meminjam barang elektronik dilarang membuka <br> <b>sosmed </b>dan <b>game</b> jika ada yang melanggar terkena hukuman di <b>blacklist selama 2 bulan</b>.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false">
                    Pasal 2
                  </button>
                </h2>
                <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion-example" >
                  <div class="accordion-body pt-0">
                    Bagi siswa-siswa SMK TI BAZMA yang <b>terlambat mengumpulkan barang elektronik</b> akan mendapatkan hukuman <b>blacklist selama 1 bulan</b>.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false">
                    Pasal 3
                  </button>
                </h2>
                <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion-example" >
                  <div class="accordion-body pt-0">
                    Bagi siswa-siswa SMK TI BAZMA yang meminjam barang elektronik <b>tanpa mengisi forum</b>, akan terkena hukuman yang sangat panjang di <b>blacklist selama 6 bulan</b> dilarang meminjam barang elektronik, jika ingin meminjam harus membuat <b>surat perizinan</b>.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

