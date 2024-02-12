@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data device laptop</h1>
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
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal,Bulan,Tahun</th>
                                <th>Nama Siswa</th>
                                <th>Mapel</th>
                                <th>Kode Device</th>
                                <th>Mentoring</th>
                                <th>Waktu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pinjam_laptop as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->tanggal_peminjaman }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->mata_pelajaran }}</td>
                                    <td>{{ $value->kode_device }}</td>
                                    <td>{{ $value->mentoring_mapel }}</td>
                                    <td>{{ $value->waktu_peminjaman }}</td>
                                    <td>
                                        <a href="#" class="btn btn-danger">Delete</a>
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
