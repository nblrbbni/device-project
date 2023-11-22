@extends('layout.master')

@section('judul')
    Dashboard
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
@endpush

@push('styles-2')
<link rel="stylesheet" href="{{ asset('style/dasboard.css') }}">
<link rel="stylesheet" href="{{ asset('style/responsive.css') }}">
@endpush

@section('content')
    <div>
        <section style="margin-left: 30rem;">
            <div class="swiper mySwiper container">
                <div class="swiper-wrapper content">
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Laptop.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Laptop</span>
                                <span class="profession">09</span>
                            </div>
                        </div>
                        <div class="name-profession">
                            <span class="name">Sisa Laptop</span>
                            <span class="profession">09</span>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Hdmi.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa HDMI</span>
                                <span class="profession">01</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Headphones.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Earphone</span>
                                <span class="profession">10</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Gaming.png') }}">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa PC</span>
                                <span class="profession">12</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Flashdisk.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Flashdisk</span>
                                <span class="profession">07</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Smartphone.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Handphone</span>
                                <span class="profession">07</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Camera.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Camera</span>
                                <span class="profession">01</span>
                            </div>
                        </div>
                        <div class="name-profession">
                            <span class="name">Sisa Camera</span>
                            <span class="profession">01</span>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Tablet.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Tablet</span>
                                <span class="profession">01</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Hard disk.png') }}" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Hardisk</span>
                                <span class="profession">01</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </section>

        <div class="title">
            <h1>Barang yang di pinjam</h1>
        </div>

    <div class="title">
        <h1>Barang yang di pinjam</h1>
    </div>

    <div class="cardinfo">
        <div class="content">
            <img src="asset/picture/user.png" alt="">
        </div>
        <div class="desctext">
            <h1>Nama</h1>
            <p>Peminjaman barang elektronik telah berhasil meminjam, selamat mengerjakan tugas bagi semua siswa <br> SMK TI BAZMA yang sedang mengerjakan tugas masing - masing, semoga cepat selesai <br> tugasnya jangan di tunda - tunda agar tugas kalian
                cepat selesai.</p>
        </div>
    </div>
@endsection

@push('script')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>
    @endpush
