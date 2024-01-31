@extends('admin.master')

@section('content')
    <section class="section">
        <div class="section-body">
            <h1>Data pengembalian device</h1>
            <div class="input-group" style="width:200px ;">
                <input type="text" class="form-control" placeholder="Search" fdprocessedid="zw07s">
                <div class="input-group-btn">
                    <button class="btn btn-primary" style="height: 41px;" fdprocessedid="wecprk"><i
                            class="fas fa-search"></i></button>
                    <a href="/calendar"><img src="assets/img/Calendar.png" alt=""
                            style="width: 38px; height: 38px;"></a>
                </div>
            </div><br>
            <div class="card mt-5">
                <div class="card-header">
                    <h4>Table data</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal,Bulan,Tahun</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Device</th>
                                    <th>Waktu Device</th>
                                    <th>Kondisi Device</th>
                                    <th>Nomor Lab</th>
                                    <th>Status</th>
                                    <th>approval</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Laptop 11</td>
                                    <td>15:00-17:00</td>
                                    <td>Baik</td>
                                    <td>Lab 2</td>
                                    <td>Sudah dikumpul</td>
                                    <td>
                                        <a href="#" class="btn btn-success">Yes</a>
                                        <a href="#" class="btn btn-danger">No</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
