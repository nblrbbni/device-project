@extends('layout.master-2')

@section('content-2')
<div class="balik">
    <a href="/" class="next round" style="text-decoration: none">
        < </a>
</div>

<br />
<br />

<div class="title">
    <h1><b>Report Tugas</b</h1>
            <h2><b>Berikut ini :</b></h2>
            <div class="iconReturn"><br>
                <img src="{{ asset('asset/picture/poto (1).png') }}" alt="">
                <img src="{{ asset('asset/picture/poto (2).png') }}" alt="">
                <img src="{{ asset('asset/picture/poto (3).png') }}" alt="">
            </div>
</div><br><br>
<form action="/report-tugas/store" method="post">
    @csrf
    <div class="labelGAP">
        <div class="col">
            <label for="images" class="drop-container" id="dropcontainer">
                <input type="file" id="images" accept="image/*" required name="foto">
            </label>
        </div>
        <br>
        <br>
        <div class="col">
            <input class="link" type="text" placeholder="Link" name="link">
        </div>
        <br>
        <br>
        <div class="col">
            <input class="link" type="text" placeholder="Email" name="email">
        </div>
    </div>
    <div class="buttonSp text-center">
        <input type="submit" class="btn btn-lg my-5" value="Submit" style="background-color: #14274c; color:white">
    </div>
</form>
<!-- script -->
<script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
<script src="{{ asset('dist/js/demo.min.js') }}" defer></script>
</body>
@endsection
