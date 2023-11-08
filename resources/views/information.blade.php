@extends('layout.master')

@section('judul')
    Notification
@endsection

@section('content')
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
                    Bagi siswa-siswa SMK TI BAZMA yang meminjam barang elektronik dilarang membuka <br> sosmed dan game jika ada yang melanggar terkena hukum di blacklist selama 2 bulan
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
                    Bagi siswa-siswa SMK TI BAZMA yang terlambat mengumpulkan barang elektronik akan mendapatkan hukum blacklist selama 1 bulan
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
                    Bagi siswa-siswa SMK TI BAZMA yang meminjam barang elektronik tanpa mengisi forum, akan terkena hukuman yang sangat panjang di blacklist selama 6 bulan dilarang meminjam barang elektronik. (jika ingin meminjam harus membuat surat perijinan)
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

