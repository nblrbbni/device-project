@extends('layout.master')

@section('judul')
Profile
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="stylesheet" href="{{ asset('js/java.js') }}">
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Perbarui Profile Anda
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
            <form action="#" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Nama Siswa</label>
                  <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                </div>
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                  <label for="quantity">Kelas</label>
                    <select id="class" class="form-control text-muted" name="class" required autocomplete="class" min="10" max="12">
                        <option class="text-muted">-- Please choose your grade --</option>
                        <option value="12" class="text-dark">12</option>
                        <option value="11" class="text-dark">11</option>
                        <option value="10" class="text-dark">10</option>
                    </select>
                </div>
                @error('class')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
                  </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Password </label>
                    <input type="text" name="password" class="form-control" value="{{ Auth::user()->password }}">
                  </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn" style="background-color:#18244c; color:white">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection