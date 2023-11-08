
@extends('layout.master')

@section('judul')
Dashboard
@endsection

@section('content')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
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
                                <span class="name">sisa laptop</span>
                                <span class="profession">09</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="{{ asset('asset/picture/Hdmi.png') }} " alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa hdmi</span>
                                <span class="profession">01</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa headphones</span>
                                <span class="profession">10</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" alt="">
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
                                <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa Kabel roll</span>
                                <span class="profession">07</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa handphone</span>
                                <span class="profession">07</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa camere</span>
                                <span class="profession">01</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide card">
                        <div class="card-content">
                            <div class="image">
                                <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" alt="">
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
                                <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/instagram-3814049__340.png" alt="">
                            </div>
                            <div class="name-profession">
                                <span class="name">Sisa printer</span>
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
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        section {
            position: relative;
            height: 450px;
            width: 1075px;
            display: flex;
            align-items: center;
        }

        .swiper {
            width: 950px;
        }

        .card {
            position: relative;
            background: #fff;
            border-radius: 20px;
            margin: 20px 0;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .card::before {
            content: "";
            position: absolute;
            height: 40%;
            width: 100%;
            background: #14274C;
            border-radius: 20px 20px 0 0;
        }

        .card .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            position: relative;
            z-index: 100;
        }

        section .card .image {
            height: 140px;
            width: 140px;
            border-radius: 50%;
            padding: 3px;
            background: #cecece;
        }

        section .card .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #fff;
        }

        .card .media-icons {
            position: absolute;
            top: 10px;
            right: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card .media-icons i {
            color: #fff;
            opacity: 0.6;
            margin-top: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .card .media-icons i:hover {
            opacity: 1;
        }

        .card .name-profession {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .name-profession .name {
            font-size: 20px;
            font-weight: 600;
        }

        .name-profession .profession {
            font-size: 15px;
            font-weight: 500;
        }

        .card .rating {
            display: flex;
            align-items: center;
            margin-top: 18px;
        }

        .card .rating i {
            font-size: 18px;
            margin: 0 2px;
            color: #14274C;
        }

        .card .button {
            width: 100%;
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card .button button {
            background: #14274C;
            outline: none;
            border: none;
            color: #fff;
            padding: 8px 22px;
            border-radius: 20px;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .button button:hover {
            background: #6616d0;
        }

        .swiper-pagination {
            position: absolute;
        }

        .swiper-pagination-bullet {
            height: 7px;
            width: 26px;
            border-radius: 25px;
            background: #14274C;
        }

        .swiper-button-next,
        .swiper-button-prev {
            opacity: 0.7;
            color: #14274C;
            transition: all 0.3s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            opacity: 1;
            color: #14274C;
        }

        .credit a {
            text-decoration: none;
            color: #14274C;
            font-weight: 800;
        }

        .credit {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>

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
@endsection
