<!doctype html>
<html lang="en">

<head>
    <title>MarsadaTrip</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="carousel/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>

<body>


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar site-navbar-target" role="banner">

            <div class="">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="index.html"><strong>CarRental</strong></a>
                        </div>
                    </div>

                    <div class="col-9  text-right fixed-top">

                        <span class="d-inline-block d-lg-none"><a href="#"
                                class=" site-menu-toggle js-menu-toggle py-5 "><span
                                    class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block fixed-top"  role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="/home" class="nav-link">Beranda</a></li>
                                <li><a href="/list" class="nav-link">Mobil</a></li>
                                <li><a href="/about" class="nav-link">Tentang</a></li>
                                <li><a href="/contact" class="nav-link">Kontak</a></li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

                                <li>
                                    @auth
                                        <strong> Selamat datang,{{ auth()->user()->name }}</strong>
                                        @else
                                        <a href="/login">Login</a>
                                    @endauth

                                </li>
                                <li>
                                    @auth
                                        <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger"> <span class="icon-sign-out"></span>&nbsp;Keluar</button>
                                  </form>
                                    @endauth


                                </li>

                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>


        <div class="hero" style="background-image: url('images/hero_1_a.jpg');">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10">

                        <div class="row mb-5">
                            <div class="col-lg-7 intro">
                                <h1><strong>MarsadaTrip</strong><br>Solusi Terbaik Perjalanan.</h1>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>



        <div class="site-section bg-white" data-aos="fade-up">
            <div class="container">
                <h2 class="section-heading"><strong>Cara Menggunakan?</strong></h2>
                <p class="mb-5">Lakukanlah <strong><a href="/login">Login</a></strong> pertama kali untuk memulai melakukan pemesanan
                     dan untuk mendapatkan akses lebih pada website ini. <br><b>Setelah itu ikutilah langkah mudah berikut:</b></p>

                <div class="row mb-5">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>1</span>
                            <div class="step-inner">
                                <span class="number text-primary">01.</span>
                                <h3>Pilih Mobil</h3>
                                <p>Pilihlah mobil sesuai dengan kebutuhan dan kenyamanan anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>2</span>
                            <div class="step-inner">
                                <span class="number text-primary">02.</span>
                                <h3>Isi Form Rental</h3>
                                <p>Isilah form dengan data benar dan jujur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="step">
                            <span>3</span>
                            <div class="step-inner">
                                <span class="number text-primary">03.</span>
                                <h3>Konfirmasi Whatsapp</h3>
                                <p>Dengan klik "Rental" data akan terkirim ke Whatsapp untuk negoisasi harga.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <a href="#" class="d-flex align-items-center play-now mx-auto">
                            <span class="icon">
                                <span class="icon-play"></span>
                            </span>
                            <span class="caption">Video how it works</span>
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 text-center order-lg-2">
                        <div class="img-wrap-1 mb-5">
                            <img src="images/feature_01.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto order-lg-1">
                        <h3 class="mb-4 section-heading"><strong>Anda dapat dengan mudah memanfaatkan website kami untuk menyewa mobil.</strong></h3>
                        <p class="mb-5">Melalui website ini, perentalan mobil dapat dilakukan dengan mudah dan praktis tanpa harus mengunjungi tempat kami.
                            Untuk informasi lebih lanjut tentang kami dapat dilakukan dengan klik 'Kontak' di bawah ini.
                        </p>

                        <p><a href="/contact" class="btn btn-primary">Kontak</a></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Daftar Mobil</strong></h2>
                        <p class="mb-5">Pilihlah mobil sesuai kebutuhan anda!</p>
                    </div>
                </div>


                <div class="row">
                    @foreach ($tes as $item)


                    <div class="col-md-6 col-lg-4 mb-4">

                        <div class="listing d-block  align-items-stretch">
                            <div class="listing-img h-100 mr-4">
                                <img src="{{  url('asset/mobil/'.$item->gambar) }}" style="height:200px !important"
                                    alt="Image" class="img-fluid">
                            </div>
                            <div class="listing-contents h-100">
                                <h3>{{$item->nama_mobil}}</h3>
                                {{-- <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div> --}}
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                    <div class="listing-feature pr-3">
                                        <span class="caption">Kapasitas:</span>
                                        <span class="number">{{$item->kapasitas}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">Tipe Mobil:</span>
                                        <span class="number">{{$item->tipe_mobil}}</span>
                                    </div>
                                    <div class="listing-feature pr-4">
                                        <span class="caption">AC:</span>
                                        <span class="number">{{$item->ac}}</span>
                                    </div>
                                </div>
                                <div>
                                    <span>
                                        <p>
                                            <ion-icon name="location-outline"></ion-icon>
                                            <span>&nbsp;{{$item->lokasi}}</span>
                                        </p>
                                    </span>
                                    @auth
                                        <p><a href="/booking/{{$item->id_mobil}}" class="btn btn-primary btn-sm"
                                            type="submit">Rental</a></p>

                                            @else
                                            <p><a href="/login" class="btn btn-primary btn-sm"
                                                type="submit">Rental</a></p>
                                    @endauth

                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-4">
                        <p><a href="/list" class="btn btn-primary" data-aos="zoom-out">Lihat Lebih Banyak</a></p>

                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="section-heading"><strong>Layanan</strong></h2>
                        <p class="mb-5">Beberapa layanan yang kami sediakan di bawah ini.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon bg-white" data-aos="zoom-in">
                                <span class="icon-car"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Mobil</h3>
                                <p>Mobil yang tersedia pada MarsadaTrip ada beberapa jenis dan dapat disesuaikan dengan kebutuhan anda.</p>
                                {{-- <p class="mb-0"><a href="#">Learn more</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon bg-info" data-aos="zoom-in">
                                <span class="icon-person"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Sopir</h3>
                                <p>Tersedia jasa sopir dari MarsadaTrip apabila pelanggan tidak memiliki sopir pribadi.</p>
                                {{-- <p class="mb-0"><a href="#">Learn more</a></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="service-1 dark">
                            <span class="service-1-icon bg-warning" data-aos="zoom-in">
                                <span class="icon-money"></span>
                            </span>
                            <div class="service-1-contents">
                                <h3>Harga</h3>
                                <p>Harga untuk rental mobil lebih terjangkau dan dapat di negosiasikan dengan MarsadaTrip.</p>
                                {{-- <p class="mb-0"><a href="#">Learn more</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section class="ftco-section bg-info" style="margin-top:-90px!importan;opacity::backdrop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <h2 class="heading-section text-white mb-5 pb-md-4" ><strong>Testimoni</strong></h2>
                    </div>
                    <div class="col-md-12">
                        <div class="featured-carousel owl-carousel">
                            @foreach ($moni as $item)

                            <div class="item">
                                <div class="blog-entry">
                                    <a  class="block-20 d-flex align-items-start" style="background-image: url('{{  url('asset/testimoni/'.$item->gambar) }}');height:12cm">
                                    </a>
                                    <div class="text border border-top-0 p-4 bg-white">

                                        <p class="text-muted">{{$item->deskripsi}}</p>
                                        <div class="d-flex align-items-center mt-4">
                                            <p class="mb-0 text-dark">{{$item->created_at}}</p>
                                            <p class="ml-auto meta2 mb-0">
                                                <a href="#" class="mr-2 text-info">{{$item->nama_pelanggan}}</a>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="site-footer " style="margin-top:-3cm;padding-bottom:-7cm;height:3cm" >
            <hr >
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class=" ">
                            <p>
                                Copyright &copy;marsadatrip <ul class="list-unstyled social">
                                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="carousel/js/jquery.min.js"></script>
    <script src="carousel/js/popper.js"></script>
    <script src="carousel/js/bootstrap.min.js"></script>
    <script src="carousel/js/owl.carousel.min.js"></script>
    <script src="carousel/js/main.js"></script>

</body>

</html>
