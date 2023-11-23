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
                <img src="{{ asset('asset/picture/Headphones.png') }}"  alt="...">
                <p>Headphone</p>
            </div>
        </div>
    </div>
</div><br><br>
{{-- main content --}}
<form action="/return-headphone/store" method="post">
    @csrf
    <div class="table text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kondisi Headphone</th>
                    <th scope="col">Kondisi Kardus</th>
                    <th scope="col">Kondisi Suara</th>
                    <th scope="col">Waktu Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <input type="date" name="tanggal_peminjaman" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </th>
                    <td>
                        <input type="text" name="nama" value="{{ Auth::user()->name }}" readonly>
                    </td>
                    <td>
                        <input type="text" name="kondisi_earphone" required>
                    </td>
                    <td>
                        <input type="text" name="kondisi_kardus" required>
                    </td>
                    <td><input type="text" name="kondisi_suara" required>
                    </td>
                    <td>
                        <input type="time" name="waktu_pengembalian" id="currentTime" readonly>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="buttonSp text-center">
        <input type="submit" class="btn btn-lg" value="Confirm" style="background-color: #14274c; color:white">
    </div>
</form>
@endsection

@push('scripts')
<script>
var now = new Date();

// Format the time as HH:mm (hours and minutes)
var hours = now.getHours().toString().padStart(2, '0');
var minutes = now.getMinutes().toString().padStart(2, '0');
var currentTime = hours + ':' + minutes;

// Set the value of the input field
document.getElementById('currentTime').value = currentTime;
</script>
@endpush
