@extends('layout.master-2')
@section('content-2')
    <div class="balik">
        <a href="/returndevice" class="next round" style="text-decoration: none">
            < </a>
    </div>
    <div class="container text-center">
        <div class="row row-card">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="single">
                    <img src="asset/picture/Projector.png" class="gambar" alt="..." />
                    <p>projector</p>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <div class="table text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kondisi projector</th>
                    <th scope="col">Kondisi kabel power</th>
                    <th scope="col">Kondisi remote</th>
                    <th scope="col">Waktu pengembalian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <input type="date" />
                    </th>
                    <td>
                        <input type="text" />
                    </td>
                    <td>
                        <input type="text" />
                    </td>
                    <td>
                        <input type="text" />
                    </td>
                    <td><input type="text" /></td>
                    <td>
                        <input type="time" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br />
    <div class="buttonSp text-center">
        <a href="" style="text-decoration: none"><b>Confirm</b></a>
    </div>
@endsection
