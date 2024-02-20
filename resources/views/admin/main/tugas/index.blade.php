@extends('admin.master')

@section('content')
    <section class="section">
        <div class="section-body">
            <h1 class="mb-3">Data Pengumpulan Tugas</h1>
            <div class="card">
                <div class="card-header">
                    <h4>Table Pengumpulan Tugas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table class="table table-bordered table-hover text-center" id="myTable">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Tanggal,Bulan,Tahun</th>
                                    <th class="text-center">Nama Siswa</th>
                                    <th class="text-center">Bukti Foto</th>
                                    <th class="text-center">Link</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Persetujuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($report_tugas as $key => $value)
                                    <tr>
                                        <td class="text-center">{{ $key + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td class="text-center"><img src="{{ asset('storage/' . $value->foto_path) }}" alt="Gambar Tugas" style="max-width:100px; height:auto;"></td>
                                        <td>{{ $value->link }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Yes</a>
                                            <a href="#" class="btn btn-danger">No</a>
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
    </section>
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
