@extends("layout.master")
@section("judul")
Halaman Edit Device
@endsection
@section("content")
<form action="/kategori/{{ $kategori->id }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label>Nama Device</label>
      <input type="text" name="nama" class="form-control" value="{{ $device->nama }}">

    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
      <label >Kondisi</label>
      <textarea name="kondisi" class="form-controll" cols="30" rows="10">{{ $device->kondisi }}</textarea>
      <input type="text" class="form-control">
    </div>
    @error('kondisi')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" value="{{ $device->stok }}">

  </div>
  @error('stok')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
