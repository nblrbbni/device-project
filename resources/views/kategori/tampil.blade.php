@extends("layout.master")
@section("judul")
Halaman List Kategori
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="stylesheet" href="{{ asset('js/java.js') }}">
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@push('scripts')
<script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script defer src="{{ asset('js/scripts.js') }}"></script>
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
            <a href="/kategori/form" class="btn btn-primary btn-sm">Tambah</a>
          <div class="card-body">

  <table class="table">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Nama Kategori</th>
        <th scope="col">Icon</th>

    </thead>
    <tbody>
        @forelse ($kategori as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->nama_kategori }}</td>
            <td>{{ $value->icon }}</td>
            <td>

                <form action="/kategori/{{ $value->id }}" method="POST">
                @csrf
                @method("DELETE")
                <a href="/kategori/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                <a href="/kategori/{{ $value->id }}/edit" class="btn btn-success btn-sm">Edit</a>
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
