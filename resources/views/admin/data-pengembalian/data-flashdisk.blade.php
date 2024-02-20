@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1 class="mb-3">Data Pengembalian Device Flashdisk</h1>
        <div class="card">
            <div class="card-header">
                <h4>Pengembalian Flashdisk</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center" id="myTable">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal Peminjaman</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Kode Device</th>
                                <th class="text-center">Kondisi Flashdisk</th>
                                <th class="text-center">Waktu Pengembalian</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($flasdisk_penembalian as $key => $value)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->tanggal_peminjaman)->format('d-m-Y') }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->kode_device }}</td>
                                    <td>{{ $value->kondisi_flashdisk }}</td>
                                    <td>{{ $value->waktu_pengembalian }}</td>
                                    <td>
                                        <form action="/return-flashdisk/{{ $value->id }}/delete" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/return-flashdisk/{{ $value->id }}/delete" class="btn btn-danger" onclick="confirmation(event)"
                                                data-id="{{ $value->id }}"
                                                data-name="{{ $value->kode_device }}">Delete</a>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">Tidak Ada Data.</td>
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