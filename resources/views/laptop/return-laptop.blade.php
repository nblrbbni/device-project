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
  </div>
  <br>
  <br>
  <div class="table text-center">
    <table class="table">
      <thead>
        <tr>
          <th scope="col" >Tanggal Peminjaman</th>
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
            <input type="date" value="<?php echo date('Y-m-d'); ?>" disabled name="tanggal">
          </th>
          <td>
            <input type="text" value="{{ Auth::user()->name }}" disabled name="nama">
          </td>
          <td>
            <input type="text" name="kondisi_mouse" name="kondisi_laptop">
          </td>
          <td>
            <input type="text" name="kondisi_keybohard">
          </td>
          <td><input type="text"></td>
          <td>
            <input type="time" id="currentTime" disabled name="waktu_pengembalian">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <div class="buttonSp text-center">
    <input class="btn btn-lg" type="submit" value="Confirm" style="background-color:#18244c; color:white">
</div>
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
