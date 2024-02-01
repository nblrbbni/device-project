@extends('layout.master-2')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts-2')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush

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
                <p>Laptop (LP)</p>
            </div>
        </div>
    </div>
</div><br><br>
{{-- main content --}}
<form action="/return-laptop/store" method="post">
    @csrf
    <div class="table text-center">
        <table class="table" id="return">
            <thead>
                <tr>
                    <th scope="col">Tanggal Peminjaman</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kode Device</th>
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
                        <select name="kode_device" id="kode_device" class="js-example-basic-single" required>
                            @foreach($device as $value)
                                <option value="{{ $value->kode_device }}">{{ $value->kode_device }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="kode_device" required> --}}
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
                        <input type="time" name="waktu_pengembalian" id="inputTime" step="1" readonly>
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
function setInputTime() {
 let currentTime = new Date();
 let hours = currentTime.getHours();
 let minutes = currentTime.getMinutes();
 let seconds = currentTime.getSeconds();

 let formattedTime = hours.toString().padStart(2, '0') + ':' +
                      minutes.toString().padStart(2, '0') + ':' +
                      seconds.toString().padStart(2, '0');

 // Set the value of the input field with id "inputTime"
 document.getElementById('inputTime').value = formattedTime;
}

setInputTime();

$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endpush
