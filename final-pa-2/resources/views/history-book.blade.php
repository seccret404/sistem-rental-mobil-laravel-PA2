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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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
                <img src="logo.png" alt="" width="100px">
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
                    <li><a href="/history" class="nav-link">History</a></li>
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
                <h1><strong>History</strong></h1>
                <div class="custom-breadcrumbs"><a href="/">Beranda</a> <span class="mx-2">/</span> <strong>History</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Mobil</th>
            <th scope="col">Tanggal Akhir</th>
            <th scope="col">Tanggal Awal</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pesanans as $pesanan)
            <tr>
              <th scope="row">1</th>
              <td>{{ $pesanan->nama_mobil }}</td>
              <td>{{ $pesanan->booking_in }}</td>
              <td>{{ $pesanan->booking_out }}</td>
              <td>
                 @if($pesanan->status == 0) 
                  Pesanan mobil anda belum di konfirmasi
                 @endif
                 @if($pesanan->status == 1)
                  Pesanan mobil anda telah di konfirmasi
                 @endif
                 @if($pesanan->status == 2)
                  Mobil anda sedang dalam perjalanan
                 @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

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

