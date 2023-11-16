@extends('layout.master')

@section('judul')
   Team
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/team.css') }}">
    <link rel="stylesheet" href="{{ asset('js/java.js') }}">
@endpush

@section('content')
    <br>
    <br>
    <div class="teamTitle">
        <h1>Our Team</h1>
    </div>
    <div class="team">
        <div class="cardTeam">
            <div class="cardCol">
                <div class="contentCard">
                    <div class="img">
                        <img src="{{ asset('asset/picture/bintang.png') }}" alt="Avatar" >
                    </div>
                    <div class="descCardTeam">
                        <h1>Bintang Rizki S</h1>
                        <p>Frontend 1</p>
                        <div class="iconCard">
                            <a href="https://www.instagram.com/bintang.rzk/" target="_blank" class="fa fa-instagram" style="margin-left: 20px"></a>
                            <a href="#" target="_blank" class="fa fa-whatsapp"></a>
                            <a href="https://github.com/Binscup" target="_blank" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contentCard">
                   <p>Bintang, our frontend developer and team leader, successfully completed our project through his outstanding leadership skills.</p>
                </div>
            </div>
            <div class="cardCol">
                <div class="contentCard">
                    <div class="img">
                        <img src="{{ asset('asset/picture/nabil.png') }}" alt="Avatar" style="">
                    </div>
                    <div class="descCardTeam">
                        <h1>M Nabil Rabbani</h1>
                        <p>Backend 1</p>
                        <div class="iconCard">
                            <a href="https://www.instagram.com/nblrbbni/" target="_blank" class="fa fa-instagram" style="margin-left: 20px"></a>
                            <a href="https://wa.me/6281935362205" target="_blank" class="fa fa-whatsapp"></a>
                            <a href="https://github.com/nblrbbni" target="_blank" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contentCard">
                   <p>Nabil, our smiling backend developer, conceals the stress that comes with the job. Just kidding — he handles it like a pro!</p>
                </div>
            </div>
            <div class="cardCol">
                <div class="contentCard">
                    <div class="img">
                        <img src="{{ asset('asset/picture/person.jpg') }}" alt="Avatar" >
                    </div>
                    <div class="descCardTeam">
                        <h1>Firmansyah</h1>
                        <p>System Analyst</p>
                        <div class="iconCard">
                            <a href="https://www.instagram.com/frans.firman/" target="_blank" class="fa fa-instagram" style="margin-left: 20px"></a>
                            <a href="#" target="_blank" class="fa fa-whatsapp"></a>
                            <a href="https://github.com/Binscup" target="_blank" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contentCard">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorum odit totam aut a omnis itaque, magni ullam fuga ratione.</p>
                </div>
            </div>
        </div><br><br><br><br>
        <div class="cardTeam">
            <div class="cardCol">
                <div class="contentCard">
                    <div class="img">
                        <img src="{{ asset('asset/picture/ilham.png') }}" alt="Avatar" >
                    </div>
                    <div class="descCardTeam">
                        <h1>M Ilham Alfiansyah</h1>
                        <p>UI Design</p>
                        <div class="iconCard">
                            <a href="https://www.instagram.com/ilham_alfynsh/" target="_blank" class="fa fa-instagram" style="margin-left: 20px"></a>
                            <a href="#" target="_blank" class="fa fa-whatsapp"></a>
                            <a href="#" target="_blank" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contentCard">
                   <p>Ilham, our UI designer, is the creative mind behind the web design you see today, meticulously aligning it with his design responsibilities.</p>
                </div>
            </div>
            <div class="cardCol">
                <div class="contentCard">
                    <div class="img">
                        <img src="{{ asset('asset/picture/person.jpg') }}" alt="Avatar" >
                    </div>
                    <div class="descCardTeam">
                        <h1>M Syahru R</h1>
                        <p>Frontend 2</p>
                        <div class="iconCard">
                            <a href="#" target="_blank" class="fa fa-instagram" style="margin-left: 20px"></a>
                            <a href="#" target="_blank" class="fa fa-whatsapp"></a>
                            <a href="https://github.com/syhruuu" target="_blank" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contentCard">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorum odit totam aut a omnis itaque, magni ullam fuga ratione.</p>
                </div>
            </div>
            <div class="cardCol">
                <div class="contentCard">
                    <div class="img">
                        <img src="{{ asset('asset/picture/person.jpg') }}" alt="Avatar" >
                    </div>
                    <div class="descCardTeam">
                        <h1>Vincent Rahadian U</h1>
                        <p>Backend 2</p>
                        <div class="iconCard">
                            <a href="https://www.instagram.com/vncnt_ru/" target="_blank" class="fa fa-instagram" style="margin-left: 20px"></a>
                            <a href="#" target="_blank" class="fa fa-whatsapp"></a>
                            <a href="https://github.com/vincentrahadianutama" target="_blank" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="contentCard">
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorum odit totam aut a omnis itaque, magni ullam fuga ratione.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

