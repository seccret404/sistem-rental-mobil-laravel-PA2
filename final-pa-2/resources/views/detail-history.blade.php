<!doctype html>
<html lang="en">

  <head>
    <title>MarsadaTrip</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
      table, tr, td, th {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>

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
                <img src="{{ asset('logo.png') }}" alt="" width="100px">
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


      <div class="hero inner-page" style="background-image: url({{ asset('images/hero_1_a.jpg') }})">

        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>History</strong></h1>
                <div class="custom-breadcrumbs"><a href="/">Beranda</a> <span class="mx-2">/</span> <a href="/history">History</a><span class="mx-2">/</span> <strong>Detail History</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>
          <table class="table table-bordered border-dark" style="margin: 10px;">
            <tr>
                <th>Nama Pemesan</th>
                <td>
                    <input type="text" class="form-control" name="id_pesanan" value="{{$detailHistory->id_pesanan}}" hidden>
                    <input type="text" class="form-control" name="namaPemesan" value="{{ $detailHistory->nama_pemesan }}" readonly></td>
            </tr>
            <tr>
                <th>Nama Mobil</th>
                <td><input type="text" class="form-control" name="namaMobil" value="{{ $detailHistory->nama_mobil }}"></td>
            </tr>
            <tr>
                @php
                $diffInDays = 0;
                $bookingIn = strtotime($detailHistory->booking_in);
                $bookingOut = strtotime($detailHistory->booking_out);

                $diffInSeconds = $bookingOut - $bookingIn;
                $diffInDays = floor($diffInSeconds / (60 * 60 * 24));
                // dd($diffInDays);

                $dp = ($detailHistory->harga_perhari * $detailHistory->jumlah_unit * $diffInDays)/2;

                $harga = ($detailHistory->harga_perhari  * $detailHistory->jumlah_unit * $diffInDays) - $dp;

                @endphp
                <th>Jumlah Hari</th>
                <td><input type="text" class="form-control" name="totalHari" value="{{ $diffInDays }} hari" readonly></td>
            </tr>
            <tr>
                <th>Jumlah Unit</th>
                <td><input type="text" class="form-control" name="jumlahUnit" value="{{$detailHistory->jumlah_unit}} unit" readonly></td>
            </tr>

            <tr>
                <th>Menggunakan Sopir</th>
                <td><input type="text" class="form-control" name="asalSopir" value="{{$detailHistory->asal_mobil}}" readonly></td>
            </tr>
            <tr>
                <th>Asal Mobil</th>
                <td><input type="text" class="form-control" name="asalMobil" value="{{$detailHistory->asal_mobil}}" readonly></td>
            </tr>
            <tr>
                <th>Total Harga Beli</th>
                <td><input type="text" class="form-control" name="total" readonly id="total" value="{{ $detailHistory->total_harga_beli }}" placeholder="0"></td>
            </tr>
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

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

  </body>

</html>

