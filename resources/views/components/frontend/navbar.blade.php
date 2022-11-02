<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1>
                <a class="navbar-brand" href="index.html">
                    <img src="/assets/images/logo.png" style="max-width: 70px" class="mt-2" alt="" />
                    <i class="fa fa-solid fa-vr-cardboard fa-beat"></i>
                    <span style="color: #ffc107">VR</span>Destination
                    <!-- <span class="fa fa-map-signs"></span> Go Trip -->
                </a>
            </h1>
            <button class="navbar-toggler collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-lg-5">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Beranda
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @@about__active">
                        <a class="nav-link" href="destination.html">Wisata</a>
                    </li>
                    <li class="nav-item @@services__active">
                        <a class="nav-link" href="artikel.html">Artikel</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="price.html">Paket & Harga</a>
                    </li>
                    <li class="nav-item @@contact__active">
                        <a class="nav-link" href="tentang.html">Tentang VRDestination</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('login') }}"
                        class="btn btn-master bg-white border border-white btn-secondary ml-3">
                        Masuk
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-master btn-primary ml-2">
                        Daftar
                    </a>
                </div>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <label class="theme-selector">
                    <input type="checkbox" id="themeToggle" />
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                </label>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
