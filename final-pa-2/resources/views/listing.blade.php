<!doctype html>
<html lang="en">

<head>
    <title>MarsadaTrip</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

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

                    <div class="col-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#"
                                class=" site-menu-toggle js-menu-toggle py-5 "><span
                                    class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block fixed-top" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="/" class="nav-link">Beranda</a></li>
                                <li><a href="/list" class="nav-link">Mobil</a></li>
                                <li><a href="/about" class="nav-link">Tentang</a></li>
                                <li><a href="/contact" class="nav-link">Kontak</a></li>
                                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                <li> @auth
                                    <strong> Selamat datang,{{ auth()->user()->name }}</strong>
                                    @else
                                    <a href="/login">Login</a>
                                @endauth</li>
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


        <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">

            <div class="container">
                <div class="row align-items-end ">
                    <div class="col-lg-5">

                        <div class="intro">
                            <h1><strong>Mobil</strong></h1>
                            <div class="custom-breadcrumbs"><a href="/">Beranda</a> <span class="mx-2">/</span>
                                <strong>Mobil</strong></div>
                        </div>

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
                                    <p><ion-icon name="location-outline"></ion-icon>
                                        <span class="icon-map"></span> &nbsp;{{$item->lokasi}}

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
                {{-- <div class="row">
          <div class="col-5">
            <div class="custom-pagination">
              <a href="#">1</a>
              <span>2</span>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
            </div>
          </div>
        </div> --}}
            </div>
        </div>






        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">Tunggu apa lagi?</h2>
                        <p class="mb-0 opa-7">Lengkapi perjalanan anda dengan melakukan pemesanan sekarang juga!</p>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="/list" class="btn btn-primary btn-white">Rental mobil sekarang!</a>
                    </div>
                </div>
            </div>
        </div>

<hr>
        <footer class="site-footer">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. </p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Resources</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Support</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row x text-center">
                    <div class="col-md-12">
                        <div class="">
                            <p>
                                Copyright &copy;marsadatrip
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

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

</body>

</html>
