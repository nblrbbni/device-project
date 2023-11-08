@extends('layout.master-2')

@section('content-2')
    <div class="balik">
        <a href="/electronic" class="next round" style="text-decoration: none;"> < </a>
    </div>

    <br>
    <br>
    <div class="container text-center">
        <div class="row row-card">
        <div class="col-md-4">
            <div id='rectangle71' class='kartu'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Headphones.png') }}" class="gambar" alt="...">
                <p>Headphone</p>
            </div>
            <a href="/sp-headset">
            <button class="button">
                <p class="text">Pilih</p>
            </button>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div id='kartu' class='kartu'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Hdmi.png') }}" class="gambar" alt="...">
                <p>HDMI</p>
            </div>
            <a href="/sp-hdmi">
            <button class="button">
                <p class="text">Pilih</p>
            </button>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div id='kartu' class='kartu'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Camera.png') }}" class="gambar" alt="...">
                <p>Camera</p>
            </div>
            <a href="/sp-camera">
            <button class="button">
                <p class="text">Pilih</p>
            </button>
            </a>
            </div>
        </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection
