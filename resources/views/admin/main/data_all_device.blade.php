@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data Semua Device</h1>
        <div class="helper-button d-flex">
            <div class="btn-group">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" fdprocessedid="lb62mr">
                    Kelas
                </button>
                <div class="dropdown-menu" x-placement="bottom-start"
                    style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#">X</a>
                    <a class="dropdown-item" href="#">XI</a>
                    <a class="dropdown-item" href="#">XII</a>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
            <input type="number" class="form-control" placeholder="Jumlah" fdprocessedid="fk1xi8o" id="search-button"
                style="input::placeholder{font-size:20px;}">

            <div class="input-group justify-content-end" style="width:200px ;">
                <input type="text" class="form-control" placeholder="Search" fdprocessedid="fk1xi8o">
                <div class="input-group-btn">
                    <button class="btn btn-primary" style="height: 41px;" fdprocessedid="mluskc" id="icon-search"><i
                            class="fas fa-search"></i></button>
                 </div>
            </div><br>
            <a href="/calendar"><img src="assets/img/Calendar.png" alt="" style="width: 38px; height: 38px;"></a>
       
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h4>Table Data</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <a href="#" class="btn btn-info mb-3">Create Device</a>
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Tanggal,Bulan,Tahun</th>
                                <th>Nama Siswa</th>
                                <th>Merk</th>
                                <th>Nomor device</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>22 - Desember - 2023</td>
                                <td>Bintang Rizki Sulistyo</td>
                                <td>XII</td>
                                <td>Device 09</td>

                                <td>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>22 - Desember - 2023</td>
                                <td>Bintang Rizki Sulistyo</td>
                                <td>XII</td>
                                <td>Device 09</td>

                                <td>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>22 - Desember - 2023</td>
                                <td>Bintang Rizki Sulistyo</td>
                                <td>XII</td>
                                <td>Device 09</td>

                                <td>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
                <nav aria-label=" justify-content-end">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection