@extends('admin.master')

@section('content')
    <div class="section-body">
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Device Utama</h5>
                                        <h2 class="mb-3 font-18">12</h2>
                                        <p class="mb-0"><span class="col-green"></span> Laptop</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/picture/Laptop.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Device Utama</h5>
                                        <h2 class="mb-3 font-18">10</h2>
                                        <p class="mb-0"><span class="col-orange"></span> PC</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/picture/Gaming.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Device Utama</h5>
                                        <h2 class="mb-3 font-18">20</h2>
                                        <p class="mb-0"><span class="col-green"></span>
                                            Earphone</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/picture/Headphones.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Camera</h5>
                                        <h2 class="mb-3 font-18">1</h2>
                                        <p class="mb-0"><span class="col-green"></span> Camera</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/picture/Camera.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Peminjaman Device PC</h4>
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
                                        <th class="text-center">Waktu Peminjaman</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pinjamcomputer as $key => $value)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td>{{ $value->kode_device }}</td>
                                            <td>{{ $value->mata_pelajaran }}</td>
                                            <td>{{ $value->waktu_peminjaman }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">Tidak Ada Data.</td>
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

