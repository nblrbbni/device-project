@extends("layout.master")
@section("judul")
Detail Device
@endsection
@section("content")
<h1>{{ $device->nama }}</h1>
<p>{{ $device->kondisi}}</p>
<p>{{ $device->stok }}</p>
<a href="/device" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
