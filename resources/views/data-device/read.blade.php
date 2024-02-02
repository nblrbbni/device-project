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
      <a href="/select-headphone">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Projector.png') }}" class="gambar" alt="...">
      <p>Projector</p>
    </div>
    <div class="link-electronic">
      <a href="/select-projector">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Tablet.png') }}" class="gambar" alt="...">
      <p>Tablet</p>
    </div>
    <div class="link-electronic">
      <a href="/select-tablet">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Camera.png') }}" class="gambar" alt="...">
      <p>Camera</p>
    </div>
    <div class="link-electronic">
      <a href="/select-camera">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Smartphone.png') }}" class="gambar" alt="...">
      <p>Handphone</p>
    </div>
    <div class="link-electronic">
      <a href="/select-handphone">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Gaming.png') }}" class="gambar" alt="...">
      <p>Computer</p>
    </div>
    <div class="link-electronic">
      <a href="/select-komputer">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Flashdisk.png') }}" class="gambar" alt="...">
      <p>Flashdisk</p>
    </div>
    <div class="link-electronic">
      <a href="/select-flashdisk">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Hard disk.png') }}" class="gambar" alt="...">
      <p>Hardisk</p>
    </div>
    <div class="link-electronic">
      <a href="/select-hardisk">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Printer.png') }}" class="gambar" alt="...">
      <p>Printer</p>
    </div>
    <div class="link-electronic">
      <a href="/select-printer">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Rj45.png') }}" class="gambar" alt="...">
      <p>LAN</p>
    </div>
    <div class="link-electronic">
      <a href="/select-lan">Pilih</a>
    </div>
  </div>
  <div id='rectangle71' class='rectangle71'>
    <div class="inter">
      <img src="{{ asset('asset/picture/Hdmi.png') }}" class="gambar" alt="...">
      <p>HDMI</p>
    </div>
    <div class="link-electronic">
      <a href="/select-hdmi">Pilih</a>
    </div>
  </div>
</div>
<br>
<br>
@endsection