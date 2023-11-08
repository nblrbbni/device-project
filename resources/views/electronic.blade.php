@extends('layout.master')

@section('judul')
Electronic
@endsection

@section('content')
    <div class="container text-center">
        <div class="row row-cards">
        <div class="col-md-4">
            <div id='rectangle71' class='rectangle71'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Laptop.png') }}" class="gambar" alt="...">
                <p>Laptop</p>
            </div>
            <button class="button"><a href="/sp-laptop" style="text-decoration: none;">
                <p class="text">Pilih</p>
                </a>
            </button>
            </div>
        </div>
        <div class="col-md-4">
            <div id='rectangle71' class='rectangle71'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Flashdisk.png') }}" class="gambar" alt="...">
                <p>Flashdisk</p>
            </div>
            <a href="sp-flashdisk">
                <button class="button">
                <p class="text">Pilih</p>
                </button>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div id='rectangle71' class='rectangle71'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Projector.png') }}" class="gambar" alt="...">
                <p>Projector</p>
            </div>
            <a href="/sp-projector">
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
    <div class="container text-center">
        <div class="row row-cards">
        <div class="col-md-4">
            <div id='rectangle71' class='rectangle71'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Printer.png') }}" class="gambar" alt="...">
                <p>Printer</p>
            </div>
            <a href="/sp-printer">
                <button class="button">
                <p class="text">Pilih</p>
                </button>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div id='rectangle71' class='rectangle71'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Smartphone.png') }}" class="gambar" alt="...">
                <p>Handphone</p>
            </div>
            <a href="/sp-handphone">
                <button class="button">
                <p class="text">Pilih</p>
                </button>
            </a>
            </div>
        </div>
        <div class="col-md-4">
            <div id='rectangle71' class='rectangle71'>
            <div class="inter">
                <img src="{{ asset('asset/picture/Tablet.png') }}" class="gambar" alt="...">
                <p>Tablet</p>
            </div>
            <a href="/sp-tablet">
                <button class="button">
                <p class="text">Pilih</p>
                </button>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
    <br>
    <br>


    <button class='rectangle74'>
        <a href="/sp-electronic" style="text-decoration: none;">
        <div class="paragraf" style="color: aliceblue;">
            Lihat elektronik yang lain
        </div>
        </a>
    </button>
    <br>
    <br>
@endsection
