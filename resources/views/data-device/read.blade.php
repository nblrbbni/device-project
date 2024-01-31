@extends('layout.master')

@section('judul')
Data Device
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('style/style.css') }}">
<link rel="stylesheet" href="{{ asset('js/java.js') }}">
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@section('content')
<br>
<br>
<!-- card -->
<div class="sectionCard">
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Laptop.png') }}" class="gambar" alt="...">
      <p>Laptop</p>
    </div>
    <div class="link-electronic">
      <a href="/datalaptop">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Headphones.png') }}" class="gambar" alt="...">
      <p>Headphone</p>
    </div>
    <div class="link-electronic">
      <a href="/dataheadphone">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Projector.png') }}" class="gambar" alt="...">
      <p>Projector</p>
    </div>
    <div class="link-electronic">
      <a href="/dataprojector">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Tablet.png') }}" class="gambar" alt="...">
      <p>Tablet</p>
    </div>
    <div class="link-electronic">
      <a href="/datatablet">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Camera.png') }}" class="gambar" alt="...">
      <p>Camera</p>
    </div>
    <div class="link-electronic">
      <a href="/datacamera">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Smartphone.png') }}" class="gambar" alt="...">
      <p>Handphone</p>
    </div>
    <div class="link-electronic">
      <a href="/datahandphone">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Gaming.png') }}" class="gambar" alt="...">
      <p>Computer</p>
    </div>
    <div class="link-electronic">
      <a href="/datacomputer">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Flashdisk.png') }}" class="gambar" alt="...">
      <p>Flashdisk</p>
    </div>
    <div class="link-electronic">
      <a href="/dataflashdisk">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Hard disk.png') }}" class="gambar" alt="...">
      <p>Hardisk</p>
    </div>
    <div class="link-electronic">
      <a href="/datahardisk">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Printer.png') }}" class="gambar" alt="...">
      <p>Printer</p>
    </div>
    <div class="link-electronic">
      <a href="/dataprinter">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Rj45.png') }}" class="gambar" alt="...">
      <p>LAN</p>
    </div>
    <div class="link-electronic">
      <a href="/datalan">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Hdmi.png') }}" class="gambar" alt="...">
      <p>HDMI</p>
    </div>
    <div class="link-electronic">
      <a href="/datahdmi">Pilih</a>
    </div>
  </div>
</div>
<br>
<br>
@endsection
