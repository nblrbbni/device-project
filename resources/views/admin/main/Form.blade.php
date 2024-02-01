@extends('admin.master')

@section('content')
    <div class="section-body">
        <h1>Edit data device</h1>
        <div class="card">
            <form>
                <div class="card-header">
                    <h4>Form Edit</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Tggl,Bln,Thn</label>
                        <input type="text" class="form-control" required="" fdprocessedid="rpbysd">
                    </div>
                    <div class="form-group">
                        <label>Nama device</label>
                        <input type="text" class="form-control" required="" fdprocessedid="23me3cj">
                    </div>
                    <div class="form-group">
                        <label>Merek device</label>
                        <input type="text" class="form-control" fdprocessedid="y3qexo">
                    </div>
                    <div class="form-group">
                        <label>Nomor device</label>
                        <input type="text" class="form-control" fdprocessedid="iimpwn">
                    </div>
                </div>
                <div class="card-footer ">
                    <button class="btn btn-" style="background-color: #14274C; color: aliceblue;"
                        fdprocessedid="ruhvoc">Confirm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
