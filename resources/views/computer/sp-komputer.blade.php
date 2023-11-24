@extends('layout.master-2')

@section('content-2')
<div class="balik">
    <a href="/electronic" class="next round" style="text-decoration: none;">
      < </a>
  </div>

  <br>
  <br>

  <form action="/sp-komputer/store" method="post">
    @csrf
  <div class="container text-center">
    <div class="row row-card">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <div class='single'>
          <img src="{{ asset('asset/picture/Gaming.png') }}" class="gambar" alt="...">
          <p>Computer</p>
        </div>
      </div>
      <div class="col-md-4">

      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="table text-center">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Tanggal Peminjaman</th>
          <th scope="col">Nama</th>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">Nomor Komputer</th>
          <th scope="col">Mentoring Mapel</th>
          <th scope="col">Waktu Peminjaman</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">
            <input type="date" name="tanggal_peminjaman">
          </th>
          <td>
            <input type="text" name="nama">
          </td>
          <td>
            <input type="text" name="mata_pelajaran">
          </td>
          <td>
            <input type="number" name="nomor_komputer"> 
          </td>
          <td><input type="text" name="mentoring_mapel"></td>
          <td>
            <input type="time" name="waktu_peminjaman">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <div class="container">
        <div class="row">
          <div class="col text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
  </div>
  </form>
@endsection
