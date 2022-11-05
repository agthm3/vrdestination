@extends('layouts.frontend')

@section('content')
    <!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner blog editContent">
            <div class="container">
                <div class="breadcrumbs-sub">
                    <ul class="breadcrumbs-custom-path">
                        <li class="right-side propClone">
                            <a href="index.html" class="editContent">Home
                                <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                            <p></p>
                        </li>
                        <li class="active editContent">Artikel</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumbs //-->

    <!-- blog block -->
    <section class="w3l-services-6">
        <div class="services-layout editContent">
            <div class="container">
                <div class="blog-grids row">
                    <div class="col-lg-4 col-md-6 blog-grid" id="zoomIn">
                        <a href="{{ route('gubernur') }}">
                            <figure>

                                <img src="{{ url('go-trip-liberty/assets/images/gubernur.jpg') }}" class="img-fluid"
                                    alt="" />
                            </figure>
                        </a>
                        <div class="blog-info">
                            <h3>
                                <a href="{{ route('gubernur') }}">
                                    Gubernur siapkan Kebun Raya Pucak Maros jadi destinasi wisata andalan Sulsel</a>
                            </h3>
                            <div class="blog-date">
                                <p class="pos-date">
                                    <span class="fa fa-clock-o mr-1"></span>3 Juni, 2020
                                </p>
                                <p class="pos-date">
                                    <span class="fa fa-comments-o mr-1"></span>0 Comments
                                </p>
                            </div>
                        </div>
                    </div>>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-sm-5 mt-4 mb-0">
                        <li class="page-item disabled">
                            <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-number" href="#1">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link page-number" href="#2">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-number" href="#3">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-next" href="#next">→</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
