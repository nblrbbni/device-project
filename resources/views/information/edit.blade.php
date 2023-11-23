@extends('layout.master')

@section('judul')
   Edit Pasal
@endsection

@section('content')
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <form action="/information/{{ $information->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>PASAL</label>
                                <input type="text" name="nama_pasal" value="{{$information->nama_pasal}}" class="form-control">
                            </div>
                            @error('nama_pasal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label>DESCRIPSI</label>
                                <textarea name="descripsi" class="form-control" id="" cols="30" rows="10">{{$information->descripsi}}</textarea>
                            </div>
                            @error('descripsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
