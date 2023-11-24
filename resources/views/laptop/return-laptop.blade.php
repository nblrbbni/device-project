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
                <img src="{{ asset('asset/picture/Laptop.png') }}" class="gambar" alt="...">
                <p>Laptop</p>
            </div>
        </div>
    </div>
</div><br><br>
{{-- main content --}}
<form action="/return-laptop/store" method="post">
    @csrf
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
                        <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
                        {{-- @error('tanggal')
                            <p class="text-sm text danger">{{ $message }}</p>
                        @enderror --}}
                    </th>
                    <td>
                        <input type="text" name="nama" value="{{ Auth::user()->name }}" readonly>
                        {{-- @error('nama')
                            <p class="text-sm text danger">{{ $message }}</p>
                        @enderror --}}
                    </td>
                    <td>
                        <input type="text" name="kondisi_mouse" required>
                        {{-- @error('kondisi_mouse')
                            <p class="text-sm text danger">{{ $message }}</p>
                        @enderror --}}
                    </td>
                    <td>
                        <input type="text" name="kondisi_laptop" required>
                        {{-- @error('kondisi_laptop')
                            <p class="text-sm text danger">{{ $message }}</p>
                        @enderror --}}
                    </td>
                    <td><input type="text" name="kondisi_keybohard" required>
                        {{-- @error('kondisi_keybohard')
                            <p class="text-sm text danger">{{ $message }}</p>
                        @enderror --}}
                    </td>
                    <td>
                        <input type="time" name="waktu_pengembalian" id="currentTime" readonly>
                        {{-- @error('waktu_pengembalian')
                            <p class="text-sm text danger">{{ $message }}</p>
                        @enderror --}}
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
