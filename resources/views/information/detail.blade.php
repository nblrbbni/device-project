@extends('layout.master')

@section('judul')
Detail
@endsection

@section('content')
<div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="card-body">
          <div class="accordion" id="accordion-example">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false">
                    <h1>{{ $information->nama_pasal }}</h1>
                </button>
              </h2>
              <div id="collapse-1" class="accordion-collapse collapse " data-bs-parent="#accordion-example" >
                <div class="accordion-body pt-0">
                    <p>{{ $information->descripsi }}</p>
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
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <h1>{{ $information->nama_pasal }}</h1>
                <p>{{ $information->descripsi }}</p>
            </div>
        </div>
    </div>
</div>


@endsection
