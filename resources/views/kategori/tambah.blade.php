@extends("layout.master")
@section("judul")
Halaman Create Kategori
@endsection
@section("content")
<form action="/kategori" method="POST">
    @csrf
    <div class="mb-3">
      <label>Nama Kategori</label>
      <input type="text" name="nama" class="form-control" >
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
      <label >Deskripsi</label>
      <textarea name="deskripsi" class="form-controll" cols="30" rows="10"></textarea>
      <input type="text" class="form-control">
    </div>
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
