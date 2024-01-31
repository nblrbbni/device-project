@extends('admin.master')

@section('content')
    <section class="section">
        <div class="section-body">
            <h1>Data Pengumpulan Tugas</h1>
            <div class="input-group" style="width:200px ;">
                <input type="text" class="form-control" placeholder="Search" fdprocessedid="9br7ph">
                <div class="input-group-btn">
                    <button class="btn btn-primary" style="height: 41px;" fdprocessedid="yen0ia"><i
                            class="fas fa-search"></i></button>
                    <a href="/calendar"><img src="assets/img/Calendar.png" alt=""
                            style="width: 38px; height: 38px;"></a>
                </div>
            </div><br>
            <div class="card mt-5">
                <div class="card-header ">
                    <h4>Table data</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md ">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal,Bulan,Tahun</th>
                                    <th>Nama Siswa</th>
                                    <th>Mentor Mapel</th>
                                    <th>Waktu</th>
                                    <th>Mapel</th>
                                    <th>Status</th>
                                    <th>approval</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>22 - Desember - 2023</td>
                                    <td>Bintang Rizki Sulistyo</td>
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
                                    <td>Bu Mimah</td>
                                    <td>15:00-17:00</td>
                                    <td>DDG</td>
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
