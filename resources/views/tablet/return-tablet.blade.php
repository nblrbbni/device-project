@extends('layout.master-2')
@section('content-2')
    <div class="balik">
        <a href="/returndevice" class="next round" style="text-decoration: none">
            < </a>
    </div>

    <br />
    <br />
    <div class="container text-center">
        <div class="row row-card">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="single">
                    <img src="asset/picture/tablet.png" class="gambar" alt="..." />
                    <p>tablet</p>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    {{-- main content --}}
    <form action="/return-tablet/store" method="post">
        @csrf
        <div class="table text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tanggal Peminjaman</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kondisi tablet</th>
                        <th scope="col">Kondisi beterai</th>
                        <th scope="col">Kondisi charger</th>
                        <th scope="col">Waktu pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <input type="date" name="tanggal_peminjaman"/>
                        </th>
                        <td>
                            <input type="text" name="nama"/>
                        </td>
                        <td>
                            <input type="text" name="kondisi_tablet"/>
                        </td>
                        <td>
                            <input type="text" name="kondisi_baterai"/>
                        </td>
                        <td><input type="text" name="kondisi_charger"/></td>
                        <td>
                            <input type="time" name="waktu_pengembalian"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br />
        <div class="buttonSp text-center">
            <input type="submit" value="confirm">
        </div>
    </form>
@endsection
