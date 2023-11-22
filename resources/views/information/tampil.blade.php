@extends('layout.master')

@section('judul')
    Halaman Tambah
@endsection

@section('content')
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <h1>Halaman Tambah</h1>
                <a href="/information/create" class="btn btn-primary btn-sm mb-3">Tambah</a>
               <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pasal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($information as $key => $value )
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->nama_pasal }}</td>
                            <td>
                                <form action="/information/{{ $value->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/information/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="/information/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Tidak Ada Data</td>
                        </tr>
                    @endforelse
                </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
