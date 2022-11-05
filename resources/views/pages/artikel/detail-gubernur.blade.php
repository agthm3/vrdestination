@extends('layouts.frontend')

@section('content')
    <!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner blog-single editContent">
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="index.html" class="editContent">Home <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">Artikel</li>
                </ul>
            </div>
        </div>
        </div>
    </section>
    <!-- breadcrumbs //-->

    <section class="w3l-blog-single">
        <div class="sec-padding editContent">
            <div class="container">
                <div class="blog-grid">
                    <div class="blog-right">
                        <!-- gallery -->
                        <!-- Blog Archives-->
                        <div class="category-list editContente">
                            <div class="comments-grid-right ">
                                <h5 class="editContent">Blog Archives</h5>
                            </div>
                            <ul>
                                <li class="propClone"><a href="{{ route('artikel-index') }}" class="editContent">Juni
                                        2020</a> <a href="blog-single.html"
                                        class="category-no editContent"><span>5</span></a></li>
                                {{-- <li class="propClone"><a href="blog-single.html" class="editContent">February 2020</a> <a
                                        href="blog-single.html" class="category-no editContent"><span>3</span></a></li>
                                <li class="propClone"><a href="blog-single.html" class="editContent">January 2020</a> <a
                                        href="blog-single.html" class="category-no editContent"><span>2</span></a></li> --}}
                            </ul>
                        </div>
                        <!--Blog Archives-->
                    </div>
                    <!--blog-grid-->
                    <div class="blog-left blog-right-single">
                        <div class="blog-grid-one">
                            <a href="blog-single.html"><img src="{{ url('go-trip-liberty/assets/images/gubernur.jpg') }}"
                                    alt=" " class="img-responsive"></a>
                            <h4><a href="blog-single.html" class="editContent"> Gubernur siapkan Kebun Raya Pucak Maros jadi
                                    destinasi wisata andalan Sulsel
                                </a></h4>
                            <p class="para editContent">
                                Makassar (ANTARA) - Gubernur Sulawesi Selatan Prof HM Nurdin Abdullah dan sejumlah kepala
                                Organisasi Perangkat Daerah (OPD) Sulsel dan Pemerintah Daerah Kabupaten Maros, melakukan
                                kunjungan ke Kebun Raya Pucak sebagai bagian mengembangkan destinasi wisata unggulan menuju
                                tatanan normal baru.

                                Gubernur menghadirkan OPD dan Pemda agar dapat melakukan orientasi dan juga mengumpulkan ide
                                untuk pengembangan kebun raya ini, termasuk melibatkan Lembaga Ilmu Pengetahuan Indonesia
                                (LIPI) dalam pengembangan kawasan konservasi tumbuhan ini.

                                Kebun Raya Pucak yang terletak di Desa Pucak dan Desa Tompo Bulu, Kecamatan Tompo Bulu,
                                Kabupaten Maros, awalnya Taman Safari (zaman Gubernur Zainal Basri Palaguna) yang kemudian
                                dialihfungsikan menjadi kebun raya. Temanya, konservasi tumbuhan bernilai ekonomi yang
                                diharapkan menjadi pusat penelitian dan pengembangan serta plasma nutfah khususnya endemik
                                Sulawesi.

                                "Ini dikembangkan, direncanakan sejak Gubernur Profesor Amiruddin. Terus dilanjutkan oleh
                                Pak Gubernur Zainal Basri Palaguna," kata Nurdin Abdullah dalam keterangannya di Makassar,
                                Rabu.

                                Pengembangan kebun raya ini merupakan salah satu bagian dari Rencana Tata Ruang Wilayah
                                (RT/RW) Mamminasata yang mengaitkan Kota Makassar, Kabupaten Maros dan Kabupatan Gowa serta
                                Kabupaten Takalar dalam satu wilayah. Diharapkan potensi-potensi wilayah dapat dikembangkan.

                                "Saya pikir ini adalah sebuah kawasan wisata yang sangat strategis, dimana perpaduan ada
                                hutan alam, lingkungannya sangat mendukung dan saya kira tinggal dipoles sedikit, ini sudah
                                bisa dinikmati oleh masyarakat," ujarnya.

                                Pembenahan kawasan akan dilakukan secepatnya dan diharapkan rampung akhir tahun 2021. Pihak
                                terkait dilibatkan untuk merumuskan rencana-rencana ke depan termasuk pengerjaan yang akan
                                dilakukan.

                                "Maka kita bertemu dengan beberapa OPD, tentu kita kalau semua bersinergi dan berkolaborasi
                                untuk melengkapi fasilitas yang ada di kebun raya ini akan semakin maju," sebutnya.

                                Termasuk dalam mempersiapkan kebun binatang, beberapa satwa Sulsel akan menjadi koleksi.
                                Pengembangan ini akan membuat masyarakat sekitar ikut berkembang dan semakin kreatif.

                                Pemerintah juga akan mendorong sektor pertanian, penyiapan lahan yang baik, benih yang
                                bagus, pengembangan varietas buah-buahan yang cocok. Sehingga masyarakat sekitar tidak hanya
                                menjadi penonton orang yang datang, tetapi juga mengambil peran, terutama menyajikan
                                kebutuhan wisatawan yang datang ke tempat ini nantinya.

                                Tumbuhan lokal di kebun raya seluas 120 hektare ini antara lain kayu lokal, yakni kayu arra
                                (Bahasa Makassar), sugimani (jabon putih), manggis hutan, jambu biji, mangga lokal dan kayu
                                manis. Banyak juga dijumpai jenis jenis Ficus (beringin), kelompok mirtaceae (family
                                Jambu-jambuan).

                                Sedangkan jenis hewan liar yang sering dijumpai, seperti babi hutan, ular sanca, kucing
                                hutan Sulawesi, monyet khas Sulawesi (macaca maura).

                                Dari Makassar ke lokasi ini berjarak 30 Km dan dapat ditempuh dalam waktu kurang lebih 45
                                menit.

                                "Saya meyakini, ini dari Makassar tidak lebih 45 menit, maka kita akan mencoba mempercepat
                                penyempurnaan kebun raya ini," lanjutnya.***1**</p>

                        </div>

                        <div class="blog-w3three-mid mt-3 editContent">
                            <div class="blog-super">
                                <p class="para editContent">
                                    Ini dikembangkan, direncanakan sejak Gubernur Profesor Amiruddin. Terus dilanjutkan oleh
                                    Pak Gubernur Zainal Basri Palaguna.... </p>
                            </div>
                            <div class="share-icons mt-4">

                                <h6>Share this post :</h6>

                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-tumblr"></span></a>
                                <a href="#"><span class="fa fa-pinterest"></span></a>
                                <a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                <a href="#vk" class="vk"><span class="fa fa-vk"></span></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- blog-grid// -->
                <!-- left-grid// -->
                <!-- <div class="sec-cont-comment">
                                        <h3 class="aside-title editContent">Recent Comments</h3>
                                        <div class="comments-grids">
                                            <div class="media-comments editContent">
                                                <div class="img-comment editContent">
                                                    <img class="img-responsive" src="assets/images/c3.jpg" alt="image">
                                                    <div class="grid-comment">
                                                        <h4><a href="#name" class="editContent">Henry Nicholas</a></h4>
                                                        <ul class="#pagew">
                                                            <li class=" editContent">15 Oct 2019 <i>|</i></li>
                                                            <li><a href="#comment" class="replay editContent">Reply</a></li>
                                                        </ul>
                                                        <p class="para editContent mt-3">Nullam facilisis diam non magna porta luctus. Aenean faci lisis erat posuere erat ornare ultr ices. Aliquam ac arcu interdum ,Aliquam ac arcu interdum, dapibus.</p>
                                                    </div>
                                                </div>
                    
                                            </div>
                    
                                            <div class="media-comments editContent second-part mt-4">
                                                <div class="editContent">
                                                    <div class="img-comment editContent">
                                                        <img class="img-responsive" src="assets/images/c2.jpg" alt="image">
                                                        <div class="grid-comment">
                                                            <h4><a href="#name" class="editContent">Henry Nicholas</a></h4>
                                                            <ul class="#pagew">
                                                                <li class=" editContent">15 Oct 2019 <i>|</i></li>
                                                                <li><a href="#comment" class="replay editContent">Reply</a></li>
                                                            </ul>
                                                            <p class="para editContent mt-3">Nullam facilisis diam non magna porta luctus. Aenean faci lisis erat posuere erat ornare ultr ices. Aliquam ac arcu interdum ,Aliquam ac arcu interdum, dapibus.</p>
                                                        </div>
                                                    </div>
                    
                                                </div>
                                                <div class="media-comments editContent">
                                                    <div class="img-comment editContent">
                                                        <img class="img-responsive" src="assets/images/c1.jpg" alt="image">
                                                        <div class="grid-comment">
                                                            <h4><a href="#name" class="editContent">Max John</a></h4>
                                                            <ul class="#pagew">
                                                                <li class=" editContent">15 Oct 2019 <i>|</i></li>
                                                                <li><a href="#comment" class="replay editContent">Reply</a></li>
                                                            </ul>
                                                            <p class="para editContent mt-3">Nullam facilisis diam non magna porta luctus. Aenean faci lisis erat posuere erat ornare ultr ices. Aliquam ac arcu interdum ,Aliquam ac arcu interdum, dapibus.</p>
                                                        </div>
                                                    </div>
                    
                                                </div>
                                            </div>
                                        </div>

                                    <div class="testi-top mt-lg-5 mt-4">
                                        <h3 class="title-main2 editContent">Leave A Message</h3>
                                        <div class="form-commets">
                                            <form action="#" method="post">
                                                <div class="media mb-2 pb-1">
                                                    <div class="editContent">
                                                        <input type="text" name="Name" required="Name" placeholder="Your Name">
                                                    </div>
                                                    <div class="editContent">
                                                        <input type="email" name="Email" required="Email" placeholder="Your Email">
                                                    </div>
                    
                                                </div>
                                                <div class="editContent">
                                                    <textarea name="Message" required="" placeholder="Write your comments here"></textarea>
                                                </div>
                    
                                                <div class="text-right">
                                                    <button class="btn button-eff action-button" type="submit">Post comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->

            </div>
    </section>
@endsection
