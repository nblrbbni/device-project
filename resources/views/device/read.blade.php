@extends('layout.master')

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
              Data Device
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <h1>Halaman Tambah</h1>
        <a href="/device/create" class="btn btn-primary mb-3">Tambah</a>
        <div class="card">
          <div class="card-body">
            <table class="table table-striped" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Device</th>
                    <th scope="col">Nama Device</th>
                    <th scope="col">Merk Device</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($device as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->kode_device }}</td>
                            <td>{{ $value->nama }}</td>
                            <td>{{ $value->merk }}</td>
                            <td>{{ $value->status }}</td>
                            <td>
                                <form action="/device/{{ $value->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/device/{{ $value->id }}/edit" class="btn" style="background-color:#14274c; color:white">Edit</a>
                                    <a href="#" class="btn btn-danger deletedevice" data-id="{{ $value->id }}" data-name="{{ $value->kode_device }}">Delete</a>
                                    {{-- <input type="submit" value="Delete" class="btn btn-danger delete" data-id="{{ $value->id }}"> --}}
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>Tidak Ada Data.</td>
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
