@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1 class="mb-3">Data Device Laptop (LP)</h1>
        <div class="card">
            <div class="card-body">
                <form action="/data-laptop" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Kode Device</label>
                        <input type="text" name="kode_device" class="form-control" placeholder="Contoh: LP-1" required>
                    </div>
                    @error('kode_device')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="quantity">Nama Device</label>
                        <input type="text" name="nama" class="form-control" placeholder="Contoh: LAPTOP 1" required>
                    </div>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="quantity">Merk Device</label>
                        <input type="text" name="merk" class="form-control" placeholder="Contoh: ASUS" required>
                    </div>
                    @error('merk')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn" style="background-color:#18244c; color:white">Submit</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Tabel Data Laptop</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center" id="myTable">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th scope="col">Kode Device</th>
                                <th scope="col">Nama Device</th>
                                <th scope="col">Merk Device</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datalaptop as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->kode_device }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->merk }}</td>
                                    <td>{{ $value->status }}</td>
                                    <td>
                                        <form action="/data-laptop/{{ $value->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="/data-laptop/{{ $value->id }}/edit" class="btn"
                                                style="background-color:#14274c; color:white">Edit</a>
                                            <a href="/data-laptop/{{ $value->id }}/delete" class="btn btn-danger"
                                                onclick="confirmation(event)" data-id="{{ $value->id }}"
                                                data-name="{{ $value->kode_device }}">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Tidak Ada Data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
@endpush