@extends('layouts.frontend')

@section('content')
    <!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about editContent">
            <div class="container">
                <div class="breadcrumbs-sub">
                    <ul class="breadcrumbs-custom-path">
                        <li class="right-side propClone">
                            <a href="index.html" class="editContent">Home
                                <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                            <p></p>
                        </li>
                        <li class="active editContent">Detail Wisata</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumbs //-->

    <section class="w3l-content-with-photo-4" id="about">
        <div class="content-with-photo4-block editContent">
            <div class="container">
                <div class="my-bio">
                    <img src="{{ url('go-trip-liberty/assets/images/teaching.png') }}" alt="product"
                        class="img-responsive about-me" />
                    <h3 class="mt-lg-4 mt-3">Pucak Teaching Farm</h3>
                    <p class="para mb-3">
                        Pucak Teaching farm sudah dilengkapi dengan 3 buah
                        kolam, kolam untuk orang dewasa dua buah dan kolam
                        untuk anak anak. Pada salah satu kolam renang yang
                        airnya jernih terdapat seluncuran yang bisa dipakai
                        sebagai arena bermain baik anak anak maupun orang
                        dewasa. Selanjutnya ada juga danau yang terletak
                        dibagian belakang PTF, pada danau tersebut terdapat
                        banyak ikan peliharaan, jenis ikan yang dipelihara
                        disitu adalah ikan patin. Selanjutnya ada padang
                        rumput dengan tumbuhan rumput dan pohon pohon jeruk
                        dan ada beberapa kuda peliharaan yang bebas merumput
                        disana. Disamping itu ada padang yang ditempati
                        beberapa ekor kijang, serta ada juga kolam
                        buayanya.Wisata Pucak Teaching Farm di Maros
                        Sulawesi Selatan ini sangat ramai di kunjunggi oleh
                        wisatawan menjelang liburan ataupun hari minggu,
                        banyak wisatawan yang menikmati liburan di Wisata
                        Pucak Teaching Farm di Maros Sulawesi Selatan
                        ini,apalagi datang bersama keluarga.
                    </p>

                </div>
                {{-- <div class="col-lg-6">
                    <img src="https://www.theasys.io/viewer/jq8C73xHawWTCmfnvLmD2VjO8TUusM" alt="product"
                        class="img-responsive about-me" />
                </div> --}}
                <iframe src="https://www.theasys.io/viewer/rCzMZ5okiKWGHI7Ept4eX29Ao3OvbK" allowfullscreen="true"
                    frameborder="0" scrolling="no" allow="vr;gyroscope;accelerometer" height="450"
                    style="width:100%;border:none;"></iframe>
            </div>
        </div>
    </section>

    {{-- <section class="w3l-recent-work">
        <div class="jst-two-col">
            <div class="container">
                <div class="row">
                    <div class="my-bio cwp4-text col-lg-6">
                        <h3>Tertarik untuk berkunjung?</h3>
                        <p class="para mt-3 mb-lg-4">
                            Anda dapat memesan tiket dengan mudah melalui
                            website kami.
                        </p>
                        <a href="price-detail.html" class="action-button btn mt-4"><strong>Pesan Tiket</strong></a>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/b4.jpg" alt="product" class="img-responsive about-me" />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
