@extends("layout.master")
@section("judul")
Detail Kategori
@endsection
@section("content")
<h1>{{ $kategori->nama }}</h1>
<p>{{ $kategori->deskripsi}}</p>
<a href="/kategori" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
