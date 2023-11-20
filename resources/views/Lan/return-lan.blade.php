@extends('layout.master-2')
@section('content-2')
    <div class="balik">
        <a href="/returndevice" class="next round" style="text-decoration: none">
            < </a>
    </div>

    <br />
    <br />
    {{-- main content --}}
    <form action="/return-lan/store" method="post">
        @csrf
    <div class="container text-center">
        <div class="row row-card">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="single">
                    <img src="asset/picture/Rj45.png" class="gambar" alt="..." />
                    <p>Lan</p>
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
                    <th scope="col">Nomor Lan</th>
                    <th scope="col">Kondisi lan</th>
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
                        <input type="number" name="nomor_LAN"/>
                    </td>
                    <td>
                        <input type="text" name="kondisi_LAN"/>
                    </td>
                    <td>
                        <input type="time" name="waktu_pengembalian"   />
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
