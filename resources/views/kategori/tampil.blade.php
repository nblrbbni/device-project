@extends("layout.master")
@section("judul")
Halaman List Kategori
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="stylesheet" href="{{ asset('js/java.js') }}">
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@section("content")

  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              Daftar Kategori
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
            <a href="/kategori/create" class="btn btn-primary btn-sm">Tambah</a>
  <table class="table">
    <thead>
        <th scope="col"></th>
        <th scope="col">Nama</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </thead>
    <tbody>
        @forelse ($kategori as $key -> $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->nama }}</td>
            <td>

                <form action="/kategori/{{ $value->id }}" method="POST">
                @csrf
                @method("DELETE")
                <a href="/kategori/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                <a href="/kategori/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                <input type="submit" value="delete" class="btn btn-danger btn-sm">
            </form>
            </td>
        </tr>
        @empty
        <tr>
            <td>Tidak Ada Data</td>
        </tr>
        @endforelse
    </tbody>
  </table>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection
