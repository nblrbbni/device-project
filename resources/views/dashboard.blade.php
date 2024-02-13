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

@endsection

@push('scripts-2')
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
