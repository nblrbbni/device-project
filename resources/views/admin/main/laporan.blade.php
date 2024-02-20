@extends('admin.master')

@section('content')
    <section class="section">
        <div class="section-body mb-5">
            <h1>Data Pengembalian & Pengumpulan</h1><br><br>
            <div class="dataCard">
                <div class="cardData">
                    <img src="{{ asset('assets/picture/Devices.png') }}" class="rounded mx-auto d-block" alt="">
                    <p>Peminjaman Device</p>
                    <div class="button">
                        <a href="/returndevice/show">
                            Lihat
                        </a>
                    </div>
                </div>
                <div class="cardData">
                    <img src="{{ asset('assets/picture/Devices.png') }}" class="rounded mx-auto d-block" alt="">
                    <p>Pengembalian Device</p>
                    <div class="button">
                        <a href="/returndevice/show">
                            Lihat
                        </a>
                    </div>
                </div>
                <div class="cardData">
                    <img src="assets/picture/Contact form.png" class="rounded mx-auto d-block" alt=""
                        style="width: 120px;">
                    <p>Pengumpulan Tugas</p>
                    <div class="button">
                        <a href="/report-tugas">
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
