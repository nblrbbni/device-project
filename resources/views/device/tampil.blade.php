@extends("layout.master")
@section("judul")
Halaman List Device
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
              Data List Device
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
            <div class="page-wrapper">
                <!-- Page header -->
                <div class="page-header d-print-none">
                  <div class="container-xl">
                    <div class="row g-2 align-items-center">
                      <div class="col">
                        <h2 class="page-title">
                          List Peminjaman Device
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
                        <a href="/device/form" class="btn btn-primary btn-sm">Tambah</a>
              <table class="table">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Device</th>
                    <th scope="col">Kondisi Device</th>
                    <th scope="col">Jumlah</th>


                </thead>
                <tbody>
                    @forelse ($device as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->nama_perangkat }}</td>
                        <td>{{ $value->kondisi_perangkat }}</td>
                        <td>{{ $value->stok }}</td>
                        <td>{{ $value->device_id }}</td>
                        <td>

                            <form action="/device/{{ $value->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <a href="/device/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/device/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
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
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
