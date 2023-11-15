@extends("layouts.app")
@section("judul")
Halaman Edit Kategori
@endsection
@section("content")
<form action="/kategori/{{ $kategori->id }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label>Nama Kategori</label>
      <input type="text" name="nama" class="form-control" value="{{ $kategori->nama }}">

    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
      <label >Deskripsi</label>
      <textarea name="deskripsi" class="form-controll" cols="30" rows="10">{{ $kategori->deskripsi }}</textarea>
      <input type="text" class="form-control">
    </div>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
