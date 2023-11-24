@extends('layout.master')

@section('judul')
Electronic
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
    <div class="link">
      <a href="/select-laptop">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Headphones.png') }}" class="gambar" alt="...">
      <p>Headphone</p>
    </div>
    <div class="link">
      <a href="/select-headphone">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Projector.png') }}" class="gambar" alt="...">
      <p>Projector</p>
    </div>
    <div class="link">
      <a href="SP-projector.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Tablet.png') }}" class="gambar" alt="...">
      <p>Tablet</p>
    </div>
    <div class="link">
      <a href="SP-tablet.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Camera.png') }}" class="gambar" alt="...">
      <p>Camera</p>
    </div>
    <div class="link">
      <a href="SP-camera.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Smartphone.png') }}" class="gambar" alt="...">
      <p>Handphone</p>
    </div>
    <div class="link">
      <a href="SP-handphone.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Gaming.png') }}" class="gambar" alt="...">
      <p>PC</p>
    </div>
    <div class="link">
      <a href="SP-pc.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Flashdisk.png') }}" class="gambar" alt="...">
      <p>Flashdisk</p>
    </div>
    <div class="link">
      <a href="SP-flashdisk.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Hard disk.png') }}" class="gambar" alt="...">
      <p>Hardisk</p>
    </div>
    <div class="link">
      <a href="">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Printer.png') }}" class="gambar" alt="...">
      <p>Printer</p>
    </div>
    <div class="link">
      <a href="Sp-printer.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Rj45.png') }}" class="gambar" alt="...">
      <p>LAN</p>
    </div>
    <div class="link">
      <a href="SP-kabelRoll.html">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Hdmi.png') }}" class="gambar" alt="...">
      <p>HDMI</p>
    </div>
    <div class="link">
      <a href="SP-hdmi.html">Pilih</a>
    </div>
  </div>
</div>
<br>
<br>
@endsection
