@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data Device Hardisk</h1>
        <div class="input-group" style="width:200px ;">
            <input type="text" class="form-control" placeholder="Search" fdprocessedid="fk1xi8o">
            <div class="input-group-btn">
                <button class="btn btn-primary" style="height: 41px;" fdprocessedid="mluskc"><i
                        class="fas fa-search"></i></button>
            </div>
        </div><br>
        <div class="card">
            <div class="card-header">
                <h4>Peminjaman Hardisk</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tahun-Bulan-Tanggal</th>
                                <th>Nama Siswa</th>
                                <th>Kode Device</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pinjamhardisk as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->tanggal_peminjaman }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->kode_device }}</td>
                                    <td>
                                        <form action="/datalaptop/{{ $value->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/datalaptop/{{ $value->id }}/delete" class="btn btn-danger"
                                                onclick="confirmation(event)" data-id="{{ $value->id }}"
                                                data-name="{{ $value->kode_device }}">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Tidak Ada Data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
