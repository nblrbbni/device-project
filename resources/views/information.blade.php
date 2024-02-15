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
                            @forelse ($information as $key => $information)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{ $key + 1 }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $key + 1 }}" aria-expanded="false">
                                            Pasal {{ $key + 1 }}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{ $key + 1 }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordion-example">
                                        <div class="accordion-body pt-0">
                                            {{ $information->descripsi }}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>Tidak ada data pasal.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
