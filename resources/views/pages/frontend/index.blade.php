@extends('layouts.frontend')
@section('content')
    <section class="w3l-main-slider">
        <!-- main-slider -->
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item text-center">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="">
                                <video autoplay muted loop id="myVideo" class="fullscreen-bg">

                                    <source src="{{ url('go-trip-liberty/assets/videos/video3.mp4') }}" type="video/mp4" />
                                </video>
                            </div>
                            <div class="banner-info">
                                <div class="container content">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>
                                            <a href="#">
                                                <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                                                <span style="color: #ffc107">VR</span><span class="text-white">D</span><span
                                                    class="text-white text-lowercase">estination</span>
                                            </a>
                                        </h5>
                                        <p class="text-secondary fw-bolder">
                                            Liburan kali ini,
                                            <span class="text-white">Mau Kemana?</span>
                                        </p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4" href="{{ route('tentang-index') }}">Tentang
                                            Kami</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
        <script src="{{ url('go-trip-liberty/assets/js/owl.carousel.js ') }}"></script>
        <!-- script for -->
        <script>
            $(document).ready(function() {
                $(".owl-one").owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false,
                        },
                        480: {
                            items: 1,
                            nav: false,
                        },
                        667: {
                            items: 1,
                            nav: true,
                        },
                        1000: {
                            items: 1,
                            nav: true,
                        },
                    },
                });
            });
        </script>
        <!-- //script -->
        <!-- /main-slider -->
    </section>
    <section class="w3l-specification-6">
        <div class="specification-layout editContent">
            <div class="container-fluid">
                <div class="row text-left img-grids">
                    <div class="col-lg-6 p-0">
                        <div class="images-right">
                            <div class="p-md-5 p-3">
                                <h4>
                                    <a href="#url">Pucak Teaching Farm</a>
                                </h4>
                                <p>
                                    Agrowisata Pucak atau disebut juga Pucak
                                    Teaching Farm merupakan agrowisata
                                    berstandar internasional yang menawarkan
                                    wisata perkebunan, perikanan, dan
                                    peternakan yang berada di Dusun Puncak,
                                    Desa Pucak, Kecamatan Tompobulu,
                                    Kabupaten Maros, Provinsi Sulawesi
                                    Selatan.
                                    <i class="fa-solid fa-circle-chevron-up"></i>
                                </p>
                                <a class="btn btn-theme2 mt-lg-5 mt-4 bg-warning text-white"
                                    href="https://ths.li/Xs7SiZ">Kunjungi
                                    Virtual!
                                    <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-0">
                        <div class="four-grids">
                            <div class="images-text">
                                <div class="ser-bg1">
                                    <div class="p-md-5 p-3">
                                        <h4>
                                            <a href="#url">Kebun Raya Pucak</a>
                                        </h4>
                                        <p>
                                            Agrowisata Pucak atau disebut
                                            juga Pucak Teaching Farm
                                            merupakan agrowisata berstandar
                                            internasional yang menawarkan
                                            wisata perkebunan, perikanan,
                                            dan peternakan yang berada di
                                            Dusun Puncak, Desa Pucak,
                                            Kecamatan Tompobulu, Kabupaten
                                            Maros, Provinsi Sulawesi
                                            Selatan.
                                        </p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4 bg-warning text-white"
                                            href="https://ths.li/Vu6uts">Kunjungi
                                            Virtual!
                                            <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="images-text">
                                <div class="ser-bg4">
                                    <div class="p-md-5 p-3">
                                        <h4>
                                            <a href="#url">Danau Pemancingan</a>
                                        </h4>
                                        <p>
                                            Danau Pemancingan Desa Pucak
                                            adalah danau yang sangat cocok
                                            untuk melakukan kegiatan hobi
                                            memancing, ada beberapa kegiatan
                                            yang dapat anda lakukan
                                            diantaranya memancing ikan, atau
                                            bakar ikan di pinggir destinasi.
                                        </p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4 bg-warning text-white" href="#">Kunjungi
                                            Virtual!
                                            <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="images-text">
                                <div class="ser-bg2">
                                    <div class="p-md-5 p-3">
                                        <h4>
                                            <a href="#url">Balla Ra Tea Ri Pucak</a>
                                        </h4>
                                        <p>
                                            Balla Ra Tea Ri Pucak adalah
                                            wisata yang bertemakan
                                            peternakan, dan perkebunan yang
                                            asri. Pengunjung dapat melakukan
                                            beberapa kegiatan diantarnya
                                            memberi makan ternak atau
                                            menanam bibit.
                                        </p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4 bg-warning text-white"
                                            href="https://ths.li/SJAvM7">Kunjungi
                                            Virtual!
                                            <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="images-text">
                                <div class="ser-bg3">
                                    <div class="p-md-5 p-3">
                                        <h4>
                                            <a href="#url">Paralayang</a>
                                        </h4>
                                        <p>
                                            Paralayanga adalah salah satu
                                            destinasi wisata yang
                                            membutuhkan adrenaline tinggi
                                            jika ingin merasakannya, anda
                                            bisa melakukan kegiatan
                                            paralayang dari ketinggialn
                                            300meter dari permukaan laut.
                                        </p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4 bg-warning text-white" href="#">Kunjungi
                                            Virtual!
                                            <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- 
    <section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="container">
                <div class="main-titles-head">
                    <h3 class="header-name">Tentukan Destinasimu</h3>
                    <p class="tiltle-para editContent">
                        Temukan destinasi wisata yang menarik, kamu dapat
                        melihat kondisi destinasi dengan fitur
                        <span><i>Virtual Reality </i></span> kami.
                    </p>
                </div>
                <div class="gallery-image row">
                    <div class="col-lg-4 col-md-6">
                        <div class="img-box">
                            <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                            <h5 class="my-2">
                                <a href="about.html">Kebun Raya Pucak</a>
                            </h5>
                            <div class="blog-date">
                                <p class="pos-date">
                                    <span class="fa fa-clock-o mr-1"></span>Buka Setiap Hari
                                </p>
                                <p class="pos-date text-right">
                                    <span class="fa fa-users mr-1"></span>Dewasa, Remaja
                                </p>
                            </div>
                            <p class="para">
                                Tanam Pohon dan lakukan kegiatan Outbond dan
                                rasakan pengalaman yang tidak akan
                                terlupakan.
                            </p>
                            <div class="top-gap">
                                <h5>Rp80.000</h5>
                                <a href="#url" class="icon text-center"><span class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="img-box">
                            <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                            <h5 class="my-2">
                                <a href="about.html">Kebun Raya Pucak</a>
                            </h5>
                            <div class="blog-date">
                                <p class="pos-date">
                                    <span class="fa fa-clock-o mr-1"></span>Buka Setiap Hari
                                </p>
                                <p class="pos-date text-right">
                                    <span class="fa fa-users mr-1"></span>Dewasa, Remaja
                                </p>
                            </div>
                            <p class="para">
                                Tanam Pohon dan lakukan kegiatan Outbond dan
                                rasakan pengalaman yang tidak akan
                                terlupakan.
                            </p>
                            <div class="top-gap">
                                <h5>Rp80.000</h5>
                                <a href="#url" class="icon text-center"><span class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="img-box">
                            <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                            <h5 class="my-2">
                                <a href="about.html">Kebun Raya Pucak</a>
                            </h5>
                            <div class="blog-date">
                                <p class="pos-date">
                                    <span class="fa fa-clock-o mr-1"></span>Buka Setiap Hari
                                </p>
                                <p class="pos-date text-right">
                                    <span class="fa fa-users mr-1"></span>Dewasa, Remaja
                                </p>
                            </div>
                            <p class="para">
                                Tanam Pohon dan lakukan kegiatan Outbond dan
                                rasakan pengalaman yang tidak akan
                                terlupakan.
                            </p>
                            <div class="top-gap">
                                <h5>Rp80.000</h5>
                                <a href="#url" class="icon text-center"><span class="fa fa-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="w3l-teams-15">
        <div class="team-single-main editContent">
            <div class="container">
                <div class="row">
                    <div class="column2 col-lg-6">
                        {{-- <img src="assets/images/b1.jpg" alt="product" class="img-responsive" /> --}}
                        <img src="{{ url('go-trip-liberty/assets/images/gubernur.jpg') }}" alt="product"
                            class="img-responsive" />
                    </div>
                    <div class="nature-row coloum4 col-lg-6">
                        <h6 class="small-title">Artikel Terbaru</h6>
                        <h3>
                            Gubernur siapkan Kebun Raya Pucak Maros jadi
                            destinasi wisata andalan Sulsel
                        </h3>
                        <p class="para editContent text">
                            Ini dikembangkan, direncanakan sejak Gubernur
                            Profesor Amiruddin. Terus dilanjutkan oleh Pak
                            Gubernur Zainal Basri Palaguna....
                        </p>
                        <a href="{{ route('gubernur') }}" class="action-button btn mt-lg-5 mt-4">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="w3l-clients" id="client">
        <div class="call-w3">
            <div class="container text-center">
                <div class="title-head">
                    <h3>Virtual Reality Destination</h3>
                    <p>
                        Menghadirkan pengalaman berwisata secara virtual,
                        survei hingga pesan tiket hanya melalui satu
                        website.
                    </p>
                    <a class="btn btn-theme2 mt-lg-5 mt-4" href="price.html">Lihat Paket</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
