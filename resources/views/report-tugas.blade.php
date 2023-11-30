@extends('layout.master-2')

@section('content-2')


<div class="balik">
    <a href="/" class="next round" style="text-decoration: none">
        < </a>
</div>

<br />
<br />

<div class="title">
    <h1><b>Report Tugas</b< /h1>
            <h2><b>Berikut ini :</b></h2>
            <div class="iconReturn"><br>
                <img src="asset/picture/poto (1).png" alt="">
                <img src="asset/picture/poto (2).png" alt="">
                <img src="asset/picture/poto (3).png" alt="">
            </div>
</div><br><br>
<form action="/report-tugas/store" method="post">
    @csrf
    <div class="labelGAP">
        <label for="images" class="drop-container" id="dropcontainer">
            <input type="file" id="images" accept="image/*" required name="foto"> 
        </label>
        <br>
        <br>
        <input class="link" type="text" placeholder="Link" name="link">
        <br>
        <br>
        <input class="link" type="text" placeholder="Email" name="email">
    </div>
    <input type="submit" value="Submit" class="submit">
</form>
<!-- script -->
<script src="./dist/js/tabler.min.js?1684106062" defer></script>
<script src="./dist/js/demo.min.js?1684106062" defer></script>
</body>

@endsection