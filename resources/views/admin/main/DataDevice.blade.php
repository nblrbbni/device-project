@extends('admin.master')

@section('content')
    <div class="main d-flex">
        <h1>Data Device</h1>
    </div>
    <div class="d-flex justify-content-end" id="create">
        <a href="/data-all-device" class=" d-flex"><img src="{{ asset('assets/img/Search.png') }}" alt="" >
            <h1 style="margin-right: 5rem">Data Device</h1>
        </a>
        <a href="" class=" d-flex"><img src="{{ asset('assets/img/Group 226.png') }}" alt="" >
            <h1 style="margin-right: 5rem">Create Device</h1>
        </a>
    </div>

    <div class="row mx-auto mt-4">
        <div class="col-lg-3 col-md-6 mx-auto " id="card-device">
            <a href="/data-laptop">
                <div class="card-admin mt-3 mx-auto">
                    <img src="/assets/picture/Laptop.png" alt="">
                    <p>Laptop</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto " id="card-device">
            <a href="/data-earphone">
                <div class="card-admin mt-3 mx-auto">
                    <img src="/assets/picture/Headphones.png" alt="">
                    <p>earphone</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto " id="card-device">
            <a href="/data-tablet">
                <div class="card-admin mt-3 mx-auto">
                    <img src="/assets/picture/Tablet.png" alt="">
                    <p>tablet</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto " id="card-device">
            <a href="/data-pc">
                <div class="card-admin mt-3 mx-auto">
                    <img src="/assets/picture/Gaming.png" alt="">
                    <p>PC</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-handphone">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Smartphone.png" alt="">
                    <p>Handphone</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-camera">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Camera.png" alt="">
                    <p>Camera</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-flashdisk">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Flashdisk.png" alt="">
                    <p>Flashdisk</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-hardisk">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Hard disk.png" alt="">
                    <p>Hardisk</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-printer">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Printer.png" alt="">
                    <p>Printer</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-lan">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Rj45.png" alt="">
                    <p>Lan</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-hdmi">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Hdmi.png" alt="">
                    <p>HDMI</p>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 mx-auto" id="card-device">
            <a href="/data-projector">
                <div class="card-admin mt-5 mx-auto">
                    <img src="/assets/picture/Projector.png" alt="">
                    <p>Projector</p>
                </div>
            </a>
        </div>
    </div>
@endsection
