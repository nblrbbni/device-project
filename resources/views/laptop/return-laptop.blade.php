@extends('layout.master-2')

@section('content-2')
    <div class="balik">
        <a href="/returndevice" class="next round" style="text-decoration: none;">
            < </a>
    </div>

    <br>
    <br>
    <div class="container text-center">
        <div class="row row-card">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class='single'>
                    <img src="asset/picture/Laptop.png" class="gambar" alt="...">
                    <p>Laptop</p>
                </div>
            </div>
        </div>
    </div><br><br>
    {{-- main content --}}
    <form action="/return-laptop/store" method="post">
        <div class="table text-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tanggal Peminjaman</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kondisi mouse</th>
                        <th scope="col">Kondisi laptop</th>
                        <th scope="col">Kondisi Keyboard</th>
                        <th scope="col">Waktu pengembalian</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">
                            <input type="date" name="tanggal">
                            @error('tanggal')
                                <p class="text-sm text danger">{{ $message }}</p>
                            @enderror
                        </th>
                        <td>
                            <input type="text" name="nama">
                            @error('nama')
                                <p class="text-sm text danger">{{ $message }}</p>
                            @enderror
                        </td>
                        <td>
                            <input type="text" name="kondisi_mouse">
                            @error('kondisi_mouse')
                                <p class="text-sm text danger">{{ $message }}</p>
                            @enderror
                        </td>
                        <td>
                            <input type="text" name="kondisi_laptop">
                            @error('kondisi_laptop')
                                <p class="text-sm text danger">{{ $message }}</p>
                            @enderror
                        </td>
                        <td><input type="text" name="kondisi_keybohard">
                            @error('kondisi_keybohard')
                                <p class="text-sm text danger">{{ $message }}</p>
                            @enderror
                        </td>
                        <td>
                            <input type="time" name="waktu_pengembalian">
                            @error('waktu_pengembalian')
                                <p class="text-sm text danger">{{ $message }}</p>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div class="buttonSp text-center">
            <a href="/return-laptop/store" style="text-decoration: none"><b>Confirm</b></a>
        </div>
    </form>
@endsection
