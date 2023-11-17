@extends("layout.master")
@section("judul")
Halaman Create Device
@endsection
@section("content")
<form action="/device" method="POST">
    @csrf
    <div class="mb-3">
      <label>Nama Device</label>
      <input type="text" name="nama" class="form-control" >
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <div class="mb-3">
      <label >Kondisi</label>
      <textarea name="kondisi" class="form-controll" cols="30" rows="10"></textarea>
      <input type="text" class="form-control">
    </div>
    @error('kondisi')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="mb-3">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" >
  </div>
  @error('stok')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
