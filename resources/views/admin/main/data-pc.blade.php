@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data device PC</h1>
        <div class="input-group" style="width:200px ;">
            <input type="text" class="form-control" placeholder="Search" fdprocessedid="fk1xi8o">
            <div class="input-group-btn">
                <button class="btn btn-primary" style="height: 41px;" fdprocessedid="mluskc"><i
                        class="fas fa-search"></i></button>
            </div>
        </div><br>
        <div class="card">
            <div class="card-header">
                <h4>Simple Table</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Tanggal,Bulan,Tahun</th>
                                <th>Nama Siswa</th>
                                <th>Kelas Siswa</th>
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
            </div>

        </div>
    </div>
@endsection
