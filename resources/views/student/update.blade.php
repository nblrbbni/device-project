@extends('layout.master')

@section('judul')
Data Siswa
@endsection

@section('content')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Perbarui Data Siswa
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
            <form action="/student/{{$student->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Nama Siswa</label>
                  <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                </div>
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                  <label for="quantity">Kelas</label>
                  <input type="number" id="quantity"  value="{{ $student->class }}" class="form-control" name="class" min="10" max="12"">
                </div>
                @error('class')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn" style="background-color:#18244c; color:white">Submit</button>
                <a href="/student" class="btn btn-primary">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
