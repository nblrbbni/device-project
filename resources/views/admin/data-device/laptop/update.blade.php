@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1 class="mb-3">Ubah Data Device Projector</h1>
        <div class="card">
            <div class="card-body">
                <form action="/data-laptop/{{ $datalaptop->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Kode Device</label>
                        <input type="text" name="kode_device" class="form-control" value="{{ $datalaptop->kode_device }}" required>
                    </div>
                    @error('kode_device')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="quantity">Nama Device</label>
                        <input type="text" name="nama" class="form-control" value="{{ $datalaptop->nama }}" required>
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="quantity">Merk Device</label>
                        <input type="text" name="merk" class="form-control" value="{{ $datalaptop->merk }}" required>
                    </div>
                    @error('merk')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn submit" style="background-color:#18244c; color:white"
                        onclick="submitForm(event)">Submit</button>
                    <a href="/data-laptop" class="btn btn-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection
