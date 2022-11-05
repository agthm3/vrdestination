@extends('layouts.frontend')

@section('content')
    <section class="w3l-inner-banner-main">
        <div class="about-inner services editContent">
            <div class="container">
                <div class="breadcrumbs-sub">
                    <ul class="breadcrumbs-custom-path">
                        <li class="right-side propClone">
                            <a href="index.html" class="editContent">Home
                                <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                            <p></p>
                        </li>
                        <li class="active editContent">Wisata</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-recent-work-hobbies" id="services">
        <div class="recent-work editContent">
            <div class="container">
                <div class="main-titles-head">
                    <h3 class="header-name">
                        3 Alasan Utama
                        <span style="color: #ffc107">VR</span>Destination
                        adalah pilihan terbaik bagi kamu !
                    </h3>
                </div>
                <div class="row service-service">
                    <div class="col-lg-4 col-md-6 propClone about-line-top">
                        <div class="color-white editContent">
                            <div class="icon-back">
                                <span class="fa fa-solid fa-vr-cardboard fa-beat"></span>
                            </div>

                            <h5>
                                <a href="blog.html" class="editContent">
                                    Virtual Experience!</a>
                            </h5>
                            <p class="para editContent">
                                VRDestination menghadirkan pengalaman
                                Virtual yang baru dalam memastikan tempat
                                wisata yang ingin kamu kunjungi, dengan
                                Virtual Reality.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 propClone about-line-top">
                        <div class="color-white editContent">
                            <div class="icon-back">
                                <span class="fa fa-solid fa-suitcase"></span>
                            </div>

                            <h5>
                                <a href="blog.html" class="editContent">All in One!</a>
                            </h5>
                            <p class="para editContent">
                                VRDestination dirancang dengan sistem yang
                                mempermudah kamu, semua informasi yang kamu
                                butuhkan kami sediakan dalam satu tampilan
                                untuk mempermudah kamu! Cek lokasi, Lihat
                                Harga, dan Pesan Tiket hanya dalam satu
                                website
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 propClone about-line-top">
                        <div class="color-white editContent">
                            <div class="icon-back">
                                <span class="fa fa-regular fa-lightbulb"></span>
                            </div>

                            <h5>
                                <a href="blog.html" class="editContent">Butuh Inspirasi?</a>
                            </h5>
                            <p class="para editContent">
                                VRDestination adalah tempat yang cocok untuk
                                menentukan destinasi yang sesuai dengan
                                keinginan mu!, jangan habiskan waktu untuk
                                berpikir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- list tempat wisata --}}
    <section class="w3l-services-two" id="services">
        <div class="service-single-page editContent">
            <div class="container">
                <div class="main-titles-head">
                    <h3 class="header-name">
                        Rekomendasi Tempat Wisata untuk kamu.
                    </h3>
                </div>
                <div class="gallery-image row">
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="{{ url('go-trip-liberty/assets/images/teaching.png') }}" alt="product"
                            class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Pucak Teaching Farm</a>
                        </h5>
                        {{-- <p class="para">Ticket Available</p> --}}
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="{{ url('go-trip-liberty/assets/images/kebun.png') }}" alt="product"
                            class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Kebun Raya Pucak</a>
                        </h5>
                        {{-- <p class="para">Ticket Available</p> --}}
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="{{ url('go-trip-liberty/assets/images/paralayang.png') }}" alt="product"
                            class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Paralayang</a>
                        </h5>
                        {{-- <p class="para">Ticket Available</p> --}}
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="{{ url('go-trip-liberty/assets/images/balla.png') }}" alt="product"
                            class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Balla Ra Tea Ri Pucak</a>
                        </h5>
                        {{-- <p class="para">Ticket Available</p> --}}
                    </div>








                    {{-- <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Pucak Teaching Farm</a>
                        </h5>
                        <p class="para">Ticket Available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Pucak Teaching Farm</a>
                        </h5>
                        <p class="para">Ticket Available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Pucak Teaching Farm</a>
                        </h5>
                        <p class="para">Ticket Available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Pucak Teaching Farm</a>
                        </h5>
                        <p class="para">Ticket Available</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/b2.jpg" alt="product" class="img-responsive" />
                        <h5 class="mt-2">
                            <a href="destination-detail.html">Pucak Teaching Farm</a>
                        </h5>
                        <p class="para">Ticket Available</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
