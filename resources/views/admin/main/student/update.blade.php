@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Perbarui Data Siswa</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/student/{{ $student->id }}" method="POST">
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
                                <input type="number" name="class" id="class" class="form-control" min="10"
                                    max="12" placeholder="Grade (10-12)">
                            </div>
                            @error('class')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button class="btn submit" style="background-color:#18244c; color:white"
                                onclick="submitForm(event)">Submit</button>
                            <a href="/student" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
