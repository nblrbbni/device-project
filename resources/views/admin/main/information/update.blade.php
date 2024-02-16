@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Data Peraturan</h1>
        <div class="card">
            <div class="card-body">
                <form action="/information/{{ $information->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Update Kode Pasal</label>
                        <input type="text" name="nama_pasal" value="{{ $information->nama_pasal }}" class="form-control">
                    </div>
                    @error('nama_pasal')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Update Nama Device</label>
                        <textarea name="descripsi" class="form-control konten">{{ strip_tags($information->descripsi) }}</textarea>
                    </div>
                    @error('descripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button class="btn submit" style="background-color:#18244c; color:white"
                        onclick="submitForm(event)">Submit</button>
                    <a href="/information/show" class="btn btn-primary">Back</a>
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

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea.konten'
        });
    </script>
@endpush
