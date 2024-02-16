@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1 class="mb-3">Data Device LAN</h1>
        <div class="card">
            <div class="card-header">
                <h4>Peminjaman LAN</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center" id="myTable">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal-Bulan-Tahun</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Kode Device</th>
                                <th class="text-center">Mata Pelajaran</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pinjamlan as $key => $value)
                               <tr>
                                    <td  class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->kode_device }}</td>
                                    <td>{{ $value->mata_pelajaran }}</td>
                                    <td>
                                        <form action="/peminjaman-lan/{{ $value->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/peminjaman-lan/{{ $value->id }}/delete" class="btn btn-danger"
                                                onclick="confirmation(event)" data-id="{{ $value->id }}"
                                                data-name="{{ $value->kode_device }}">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Tidak Ada Data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endpush
