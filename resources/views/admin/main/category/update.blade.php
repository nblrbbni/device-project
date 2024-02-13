@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data Kategori</h1>
        <div class="card">
            <div class="card-body">
                <form action="/categories/{{ $category->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Update Kode Device</label>
                        <input type="text" name="kode_device" value="{{ $category->kode_device }}" class="form-control">
                    </div>
                    @error('kode_device')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Update Nama Device</label>
                        <input type="text" name="nama" value="{{ $category->nama }}" class="form-control">
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn submit" style="background-color:#18244c; color:white"
                        onclick="submitForm(event)">Submit</button>
                    <a href="/categories" class="btn btn-primary">Back</a>
                </form>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Mata Pelajaran</h4>
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
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($mapel as $key => $value)
                                        <tr>
                                            <td class="text-center"></td>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->mapel }}</td>
                                            <td>
                                                <form action="/mapel/{{ $value->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="/mapel/{{ $value->id }}/edit" class="btn"
                                                        style="background-color:#14274c; color:white">Edit</a>
                                                    <a href="#" class="btn btn-danger deletemapel"
                                                        data-id="{{ $value->id }}"
                                                        data-name="{{ $value->mapel }}">Delete</a>
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
        </div> --}}
    </div>
@endsection
