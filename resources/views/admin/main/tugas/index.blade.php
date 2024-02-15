@extends('admin.master')

@section('content')
    <section class="section">
        <div class="section-body">
            <h1>Data Pengumpulan Tugas</h1>
            <div class="input-group" style="width:200px ;">
                <input type="text" class="form-control" placeholder="Search" fdprocessedid="9br7ph">
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
                        <table class="table table-striped table-md ">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal,Bulan,Tahun</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Bukti Foto</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Persetujuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($report_tugas as $key => $value)
                                    <tr>
                                        <td class="text-center"></td>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td><img src="{{ asset('storage/' . $value->foto_path) }}" alt="Gambar Tugas" style="max-width:100px; height:auto;"></td>
                                        <td>{{ $value->link }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>
                                            <a href="#" class="btn btn-success">Yes</a>
                                            <a href="#" class="btn btn-danger">No</a>
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
    </section>
@endsection
