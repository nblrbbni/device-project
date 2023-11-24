@extends('layout.master-2')

@section('content-2')
<div class="balik">
    <a href="/electronic" class="next round" style="text-decoration: none;">
      < </a>
  </div>

  <br>
  <br>

  <form action="/select-hardisk/store" method="post">
    @csrf
  <div class="container text-center">
    <div class="row row-card">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <div class='single'>
          <img src="{{ asset('asset/picture/Hard disk.png') }}" class="gambar" alt="...">
          <p>Hardisk</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="table text-center">
    <table class="table" id="return">
      <thead>
        <tr>
          <th scope="col">Tanggal Peminjaman</th>
          <th scope="col">Nama</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Nomor Hardisk</th>
          <th scope="col">Mentoring Mapel</th>
          <th scope="col">Waktu Peminjaman</th>
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
            <input type="text" name="mata_pelajaran" required>
          </td>
          <td>
            <input type="number" name="nomor_hardisk" required>
          </td>
          <td>
            <input type="text" name="mentoring_mapel" required>
        </td>
          <td>
            <input type="time" name="waktu_peminjaman" id="currentTime" readonly>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <input type="submit" class="btn btn-lg" value="Confirm" style="background-color: #14274c; color:white">
      </div>
    </div>
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
