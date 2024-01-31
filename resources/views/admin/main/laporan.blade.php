@extends('admin.master')

@section('content')
    <section class="section">
        <div class="section-body">
            <h1>Data pengempulan & pengembalian</h1><br><br>
            <div class="dataCard">
                <div class="cardData">
                    <img src="{{ asset('assets/picture/Devices.png') }}" class="rounded mx-auto d-block" alt="">
                    <p>Device</p>
                    <div class="button">
                        <a href="/Device">
                            View
                        </a>
                    </div>
                </div>
                <div class="cardData">
                    <img src="assets/picture/Contact form.png" class="rounded mx-auto d-block" alt=""
                        style="width: 120px;">
                    <p>Tugas</p>
                    <div class="button">
                        <a href="/tugas">
                            View
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
