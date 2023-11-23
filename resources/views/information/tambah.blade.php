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
                <form action="/information" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Pasal</label>
                        <input type="text" name="nama_pasal" class="form-control">
                    </div>
                    @error('nama_pasal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <div class="form-group">
                        <label>Isi Pasal</label>
                        <textarea name="descripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    @error('descripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
