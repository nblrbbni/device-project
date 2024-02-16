@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1 class="mb-3">Data Peraturan</h1>
        <div class="card">
            <div class="card-body">
                <form action="/information" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nomor Pasal</label>
                        <input type="number" name="nama_pasal" class="form-control" required>
                    </div>
                    @error('nama_pasal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Pasal</label>
                        <textarea name="descripsi" class="form-control konten"></textarea>
                    </div>
                    @error('descripsi')
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
                        <h4>Tabel Peraturan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-center" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nomor Pasal</th>
                                        <th class="text-center">Deskripsi Pasal</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($information as $key => $value)
                                        <tr>
                                            <td class="text-center">{{ $key + 1 }}</td>
                                            <td class="text-center">{{ $value->nama_pasal }}</td>
                                            <td class="text-center">{{ Str::limit(strip_tags($value->descripsi), 100) }}</td>
                                            <td>
                                                <form action="/information/{{ $value->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="/information/{{ $value->id }}/edit" class="btn"
                                                        style="background-color:#14274c; color:white">Edit</a>
                                                    <a href="/information/{{ $value->id }}/delete" class="btn btn-danger"
                                                        onclick="confirmation(event)" data-id="{{ $value->id }}"
                                                        data-name="{{ $value->nama_pasal }}">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">Tidak Ada Data.</td>
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

@push('style')
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>

    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea.konten'
        });

        let table = new DataTable('#myTable');
    </script>
@endpush
