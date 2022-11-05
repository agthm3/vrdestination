<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/795e24dc42.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Virtual Reality Destination</title>

    <!-- Template CSS -->

    <link rel="stylesheet" href="{{ url('go-trip-liberty/assets/css/style-liberty.css') }}" />
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
</head>

<body id="home">
    <section class="w3l-header-4 header-sticky">
        <!--header-->
        @include('components/frontend/navbar')
        <!--/header-->
    </section>
    {{-- <script src="assets/js/jquery-3.3.1.min.js"></script> --}}

    <script src="{{ url('go-trip-liberty/assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Common jquery plugin -->
    <!--bootstrap working-->
    {{-- <script src="{{ assets / js / bootstrap . min . js }}"></script> --}}
    <script src="{{ url('go-trip-liberty/assets/js/bootstrap.min.js') }}"></script>
    <!--bootstrap working//-->
    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $(".navbar-toggler").click(function() {
                $("body").toggleClass("noscroll");
            });
        });
    </script>
    <!-- disable body scroll which navbar is in active -->
    <!--theme switcher dark and light mode script-->
    <script>
        const bodyElement = document.querySelector("body");
        const themeToggle = document.querySelector("#themeToggle");
        const darkModeMql = window.matchMedia(
            "(prefers-color-scheme: dark)"
        );

        const currentTheme = localStorage.getItem("theme") ?
            localStorage.getItem("theme") :
            userPreference(darkModeMql);

        if (currentTheme) {
            bodyElement.classList.add(currentTheme);

            if (currentTheme === "dark") {
                themeToggle.checked = true;
            }
        }

        function userPreference(e) {
            if (e.matches) {
                bodyElement.classList.add("dark");
                return "dark";
            } else {
                bodyElement.classList.remove("dark");
                return "";
            }
        }

        darkModeMql.addListener(userPreference);

        function themeSwitcher(e) {
            if (e.target.checked) {
                bodyElement.classList.add("dark");
                localStorage.setItem("theme", "dark");
            } else {
                bodyElement.classList.remove("dark");
                localStorage.setItem("theme", "");
            }
        }

        themeToggle.addEventListener("change", themeSwitcher);
    </script>
    <!--theme switcher dark and light mode script//-->
    <section class="w3l-main-slider">
        <!-- main-slider -->
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item text-center">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="">
                                <video autoplay muted loop id="myVideo" class="fullscreen-bg">

                                    <source src="{{ url('go-trip-liberty/assets/videos/video3.mp4') }}"
                                        type="video/mp4" />
                                </video>
                            </div>
                            <div class="banner-info">
                                <div class="container content">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>
                                            <a href="#">
                                                <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                                                <span style="color: #ffc107">VR</span><span
                                                    class="text-white">D</span><span
                                                    class="text-white text-lowercase">estination</span>
                                            </a>
                                        </h5>
                                        <p class="text-secondary fw-bolder">
                                            Liburan kali ini,
                                            <span class="text-white">Mau Kemana?</span>
                                        </p>
                                        <a class="btn btn-theme2 mt-lg-5 mt-4" href="tentang.html">Tentang Kami</a>
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
        @yield('content')

        @include('components/frontend/footer')

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-chevron-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (
                    document.body.scrollTop > 20 ||
                    document.documentElement.scrollTop > 20
                ) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <!-- /move top -->
</body>

</html>
