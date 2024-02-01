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
          @if (Auth::user() && !Str::contains(Auth::user()->email, '@example.com'))
          <h1>Halaman Tambah</h1>
          <a href="/information/create" class="btn btn-primary btn-sm mb-3">Tambah</a>
          @endif
            <div class="card">
                <div class="card-body">
                    <table class="table" id="information">
                        <thead>
                            <tr>
                                <th scope="col">Pasal</th>
                                @if (Auth::user() && !Str::contains(Auth::user()->email, '@example.com'))
                                <th scope="col">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($information as $key => $value )
                                <tr>
                                    <td>
                                        <div class="accordion" id="accordion-example">
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
                                            </div>
                                    </td>
                                @if (Auth::user() && !Str::contains(Auth::user()->email, '@example.com'))
                                    <td>
                                        <form action="/information/{{ $value->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <a href="/information/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a> --}}
                                            <a href="/information/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @empty
                                <tr>
                                    <td>Tidak Ada Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
