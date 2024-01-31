@extends('admin.master')
@section('content')
    <div class="section-body">
        <h1>Data Siswa</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Table Data</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" fdprocessedid="n3oxv">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" fdprocessedid="17droi"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th class="text-center">

                                        </th>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas siwa</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">

                                        </td>
                                        <td>1</td>
                                        <td>Bintang</td>
                                        <td>
                                            XXI
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">

                                        </td>
                                        <td>2</td>
                                        <td>ilham</td>
                                        <td>
                                            XXI
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                        </td>
                                        <td>3</td>
                                        <td>Nabil</td>
                                        <td>
                                            XXI
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                        </td>
                                        <td>4</td>
                                        <td>Vincent</td>
                                        <td>
                                            XXI
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
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
