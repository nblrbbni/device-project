@extends('admin.master')

@section('content')
<section class="section">
    <div class="section-body">
        <h1>Data Pengumpulan Tugas</h1>
        <div class="input-group" style="width:200px ;">
            <input type="text" class="form-control" placeholder="Search" fdprocessedid="9br7ph">
            <div class="input-group-btn">
                <button class="btn btn-primary" style="height: 41px;" fdprocessedid="yen0ia"><i class="fas fa-search"></i></button>
                <a href="/calendar"><img src="assets/img/Calendar.png" alt="" style="width: 38px; height: 38px;"></a>
            </div>
        </div><br>
        <div class="card mt-5">
            <div class="card-header ">
                <h4>Table Data</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md ">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Link</th>
                                <th>Email</th>
                                <th>Aproval</th>

                            </tr>
                            @if (!empty($reportTugas))
                                @foreach ($reportTugas as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{asset("storage/foto-user/" . $value->foto)}}" alt="" width="100"></td>
                                        <td><a href="#">{{ $value->link }}</a></td>
                                        <td>{{ $value->email }}</td>    
                                        <td>
                                            <a href="#" class="btn btn-success">Yes</a>
                                            <a href="#" class="btn btn-danger">No</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                
                                <tr>
                                    Tidak Ada Data
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection