@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data Siswa</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Siswa</h4>
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
                                <thead>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas siwa</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($student as $key => $value)
                                        <tr>
                                            <td class="p-0 text-center"></td>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->class }}</td>
                                            <td>
                                                <form action="/student/{{ $value->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="/student/{{ $value->id }}/edit" class="btn"
                                                        style="background-color:#14274c; color:white">Edit</a>
                                                    <a href="/student/{{ $value->id }}/delete" class="btn btn-danger"
                                                        onclick="confirmation(event)">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="p-0 text-center"></td>
                                            <td>Tidak Ada Data.</td>
                                            <td>Tidak Ada Data.</td>
                                            <td>Tidak Ada Data.</td>
                                            <td>Tidak Ada Data.</td>
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
