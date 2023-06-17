<!doctype html>
<html lang="en">

  <head>
    <title>MarsadaTrip</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
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
                    <li><strong> Selamat datang,{{ auth()->user()->name }}</strong></li>
                    <li><form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger"> <span class="icon-sign-out"></span>&nbsp;Keluar</button>
                      </form></li>
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
                <h1><strong>Kontak</strong></h1>
                <div class="custom-breadcrumbs"><a href="/">Beranda</a> <span class="mx-2">/</span> <strong>Kontak</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>



    <div class="site-section bg-white" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Hubungi kami dan gunakan form di bawah ini.</h2>
          <p>Jika anda memiliki kendala ataupun ingin memberikan masukan, silahkan mengisi form di bawah ini atau hubungi kami dengan kontak yang tersedia.</p>
        </div>
      </div>
        <div class="row">
            <div class="col-12">
                @if (Session::get('success'))
                <div class="alert alert-success">

                    {{Session::get('success')}}
                </div>
                @endif
                @if (Session::get('error'))
                <div class="alert alert-danger">

                    {{ Session::get('error')}}

                </div>
                @endif
            </div>
          <div class="col-lg-8 mb-5" >
            <form action="/adfed" method="post">
                @csrf
              <div class="form-group row">
                <div class="col-md-12 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="nama" readonly value="{{$nama}}" placeholder="Name">
                </div>

              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" name="email" class="form-control" readonly value="{{$email}}" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="pesanku" id="" class="form-control" placeholder="Masukan anda menjadi koreksi bagi kami" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Kirim Masukan">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto bg-light">
            <div class="bg-light p-3 p-md-5">
              <h3 class="text-black mb-4">Info kontak</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Alamat:</span>
                  <span>Jl. Siraja Deang Toruan, Ompu Raja Hutapea, Kec. Laguboti, Toba, Sumatera Utara 22381
                </span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Telepon:</span><span>0853 7356 6250
                </span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Media Sosial:</span><span>

                    <ul class="list-unstyled social">
                        <li><a href="https://www.facebook.com/profile.php?id=100079523299775"><span class="icon-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/marsada.trip/ "><span class="icon-instagram"></span></a></li>
                      </ul>
                </span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <footer class="site-footer" style="margin-top:-3cm;padding-bottom:-7cm;height:3cm">
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

