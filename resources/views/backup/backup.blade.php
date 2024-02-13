<div>
    <div class="cardCaroasel">
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
    </div>
</div>
<div class="cardinfo">
    <div class="contentInfo">
        <img src="{{ asset('asset/picture/Laptop.png') }}" alt="">
        <p>Laptop </p>
    </div>
    <div class="table text-center">
        <table>
            <tr>
                <th>Tggl,Bln,Tahun</th>
                <th>Nama</th>
                <th>Mapel</th>
                <th>Nomor Device</th>
                <th>Nomor Lab</th>
                <th>Waktu Peminjaman</th>
            </tr>
            <tr>
                <td>22-09-2023</td>
                <td>Roland Mendel</td>
                <td>MKK</td>
                <td>14</td>
                <td>02</td>
                <td>15:00-17:00</td>
            </tr>
        </table>
    </div>
</div>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

    .garis_tepi1 {
        border: 4px solid red;
    }

    section {
        position: relative;
        height: 450px;
        width: 1075px;
        display: flex;
        align-items: center;
        font-family: poppins;
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
        background: #14274c;
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
        /* height: 100%; */
        width: 70%;
        object-fit: cover;
        margin-left: 20px;
        margin-top: 17px;
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
        color: #14274c;
    }

    .card .button {
        width: 100%;
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }

    .card .button button {
        background: #14274c;
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
        background: #14274c;
    }

    .swiper-button-next,
    .swiper-button-prev {
        opacity: 0.7;
        color: #14274c;
        transition: all 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        opacity: 1;
        color: #14274c;
    }

    .credit a {
        text-decoration: none;
        color: #14274c;
        font-weight: 800;
    }

    .credit {
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .div style {
        width: 1207px;
        height: 207px;
        flex-shrink: 0;
    }

    .notifcard {
        width: 1207px;
        height: 207px;
        flex-shrink: 0;
        border-radius: 11px;
        border: 1px solid #000;
        background: #fff;
        box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.25);
        margin: 1px 30rem;
        display: grid;
        /* gap: 20px; */
        grid-template-columns: auto auto;
        padding: 20px;
    }

    header {
        background-color: #182433;
        height: 3rem;
    }

    header h1 {
        color: #f0ffff;
        margin-left: 24rem;
        padding: 10px;
        font-size: 20px;
    }

    aside a:hover {
        background-color: #f0ffff4f;
        transition: 0.2s;
    }

    .cardinfo {
        width: 950px;
        height: 207px;
        flex-shrink: 0;
        border-radius: 11px;
        border: 1px solid #0000003d;
        background: #fff;
        box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.123);
        margin-left: 34rem;
        padding: 20px;
        font-family: poppins;
        display: grid;
        gap: 10px;
        grid-template-columns: auto auto;
    }

    .title h1 {
        margin-left: 34rem;
        font-family: poppins;
        font-size: 20px;
    }

    .content img {
        width: 100px;
        margin-top: 15px;
    }

    .contentInfo {
        width: 167.788px;
        height: 169px;
        flex-shrink: 0;
        border-radius: 11px;
        border: 3px solid #14274c;
        background: #fff;
        box-shadow: 0px 4px 22px 0px rgba(0, 0, 0, 0.25);
        text-align: center;
    }

    .contentInfo img {
        width: 86.623px;
        height: 85.7px;
        flex-shrink: 0;
        margin-top: 20px;
    }

    .contentInfo p {
        margin-top: 10px;
    }

    @media (max-width: 900px) {
        .card {
            width: calc(100% / 2 - 20px);
            /* Adjust width for two columns */
        }
    }

    @media (max-width: 600px) {
        .card {
            width: 100%;
            /* Full width for one column */
            margin: 0;
        }
    }



    /* .table{
  margin-left: -2rem;
  margin-top: 15px;
} */

    table {
        font-family: 'poppins';
        border-collapse: collapse;
        width: 45rem;
        text-align: center;
        font-size: 10px;
        border: 1px solid #dddddd;
    }

    td,
    th {
        text-align: center;
        padding: 8px;
    }
</style>
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
