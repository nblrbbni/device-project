@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data Guru</h1>
        <div class="card">
            <div class="card-body">
                <form action="/guru" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Tambah Guru</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn" style="background-color:#18244c; color:white">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Guru</h4>
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
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Guru</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($guru as $key => $value)
                                        <tr>
                                            <td class="text-center"></td>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td>
                                                <form action="/guru/{{ $value->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="/guru/{{ $value->id }}/edit" class="btn"
                                                        style="background-color:#14274c; color:white">Edit</a>
                                                    <a href="/guru/{{ $value->id }}/delete" class="btn btn-danger" onclick="confirmation(event)"
                                                        data-id="{{ $value->id }}"
                                                        data-name="{{ $value->nama }}">Delete</a>
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
        </div>
    </div>
@endsection
