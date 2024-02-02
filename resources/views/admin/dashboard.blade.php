@extends('layout.admin.master')

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
                                        <h5 class="font-15">device utama</h5>
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
                                        <h5 class="font-15"> device utama</h5>
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
                        <h4>Data peminjaman Device</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div id="save-stage_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="save-stage"></label>
                                        </div>
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama siswa</th>
                                        <th>Kelas Siswa</th>
                                        <th>Tggl,Bulan,Tahun & waktu Peminjaman</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Muhamad Ilham Alfiansyah</td>
                                        <td>XII</td>
                                        <td>22 - September - 2023 / 08.00 - 22.00 </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Muhamad Ilham Alfiansyah</td>
                                        <td>XII</td>
                                        <td>22 - September - 2023 / 08.00 - 22.00 </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Muhamad Ilham Alfiansyah</td>
                                        <td>XII</td>
                                        <td>22 - September - 2023 / 08.00 - 22.00 </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Muhamad Ilham Alfiansyah</td>
                                        <td>XII</td>
                                        <td>22 - September - 2023 / 08.00 - 22.00 </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Muhamad Ilham Alfiansyah</td>
                                        <td>XII</td>
                                        <td>22 - September - 2023 / 08.00 - 22.00 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
