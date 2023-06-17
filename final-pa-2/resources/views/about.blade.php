<!doctype html>
<html lang="en">

  <head>
    <title>MarsadaTrip</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
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

              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

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


      <div class="hero inner-page" style="background-image: url('images/hero_1_a.jpg');">

        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>Tentang</strong></h1>
                <div class="custom-breadcrumbs"><a href="/">Beranda</a> <span class="mx-2">/</span> <strong>Tentang</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>



    <div class="site-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
            <img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-down-left">
          </div>
          <div class="col-lg-4 mr-auto" data-aos="zoom-in-up">
            <h2>Mengapa Harus MarsadaTrip?</h2>
            <p>MarsadaTrip menyediakan kendaraan yang selalu prima, siap mengantar ke seluruh tujuan.
                 Banyak pelanggan yang menggunakan jasa rental ini untuk keperluan dinas, pernikahan, wisuda, dan berwisata.
                  Semua kendaraan yang tersedia selalu bersih dan wangi.
                 Hal ini membuat penumpang akan nyaman berkendara dan menempuh perjalanan dengan menggunakan unit dari rental mobil Toba..</p>
         </div>
        </div>
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


<footer class="site-footer" style="margin-top:-3cm;padding-bottom:-7cm;height:3cm">

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

