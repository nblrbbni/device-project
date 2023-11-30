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
            <form action="/profile/update" method="POST">
                @csrf
                @method('PUT')

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-3">
                <label class="form-label">Nama Siswa</label>
                <input type="text" name="name" class="form-control" value="{{ $detailprofile->name}}">
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                <label for="quantity">Kelas</label>
                    <input type="number" name="class" id="" min="10" max="12" class="form-control" value="{{ $detailprofile->class}}">
                </div>
                @error('class')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $detailprofile->email }}">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Password </label>
                    <input type="text" name="password" class="form-control">
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
