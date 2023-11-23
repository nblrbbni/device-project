@extends('layout.master-2')

@section('content-2')
<div class="balik">
<a href="/" class="next round" style="text-decoration: none;">
        < </a>
</div>
<div class="title">
    <h1><b>Kembalikan Perangkat</b</h1>
    <h2><b>Berikut ini :</b></h2>
</div>
<div class="grid-container">
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Laptop.png') }}" alt="...">
            <p>Laptop</p>
        </div>
        <div class="cardButton">
            <a href="/return-laptop" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Headphones.png') }}" alt="">
            <p>Headphone</p>
        </div>
        <div class="cardButton">
            <a href="/return-headphone" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Tablet.png') }}" alt="">
            <p>Tablet</p>
        </div>
        <div class="cardButton">
            <a href="/return-tablet" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Flashdisk.png') }}" alt="">
            <p>Flashdisk</p>
        </div>
        <div class="cardButton">
            <a href="/return-flasdisk" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Printer.png') }}" alt="">
            <p>Printer</p>
        </div>
        <div class="cardButton">
            <a href="/return-printer" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Camera.png') }}" alt="">
            <p>Camera</p>
        </div>
        <div class="cardButton">
            <a href="/return-camera" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Smartphone.png') }}" alt="">
            <p>Handphone</p>
        </div>
        <div class="cardButton">
            <a href="/return-hp" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Gaming.png') }}" alt="">
            <p>PC</p>
        </div>
        <div class="cardButton">
            <a href="returnSP-PC.html" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Rj45.png') }}" alt="">
            <p>LAN</p>
        </div>
        <div class="cardButton">
            <a href="returnSP-lan.html" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Hdmi.png') }}" alt="">
            <p>HDMI</p>
        </div>
        <div class="cardButton">
            <a href="returnSP-HDMI.html" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Projector.png') }}" alt="">
            <p>Projector</p>
        </div>
        <div class="cardButton">
            <a href="returnSP-projector.html" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
    <div class="cardGrid">
        <div class="interGrid">
            <img src="{{ asset('asset/picture/Hard disk.png') }}" alt="">
            <p>Hardisk</p>
        </div>
        <div class="cardButton">
            <a href="returnSP-hardisk.html" style="text-decoration: none;">Pilih</a>
        </div>
    </div>
</div>
@endsection
