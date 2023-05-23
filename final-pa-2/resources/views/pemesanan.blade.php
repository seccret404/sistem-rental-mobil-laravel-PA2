<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta17
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Register-Marsadatrip</title>
    <!-- CSS files -->
    <link href="{{asset('tabler/dist/css/tabler.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/tabler-flags.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/tabler-payments.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/tabler-vendors.min.css?1674944402')}}" rel="stylesheet"/>
    <link href="{{asset('tabler/dist/css/demo.min.css?1674944402')}}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <script src="{{asset('tabler/dist/js/demo-theme.min.js?1674944402')}}"></script>
    <div class="page page-center">
      <div class="container container-normal py-4">
        <div class="row align-items-center g-4 mt-5">
          <div class="col-lg">
            <div class="container-tight">

              <div class="card card-md">
                <div class="card-body">
                    <div class="text-center mb-4 mt-5">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="marsada.png" height="170px" alt=""></a>
              </div>
                  <h2 class="h2 text-center mb-4">Isi Data Rental</h2>
                 @if (Session::get('warning'))
                 <div class="alert bg-warning">
                    <p>{{Session::get('warning')}}</p>
                 </div>

                 @endif
                  <form action="/booking/proses" method="post" id="myform"  autocomplete="off" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="email" class="form-control" id="nama" readonly value="{{$nama}}" name="nama" placeholder="nama...." autocomplete="off">
                      </div>
                    <div class="mb-3">
                        <label class="form-label">No Hp</label>
                        <input type="email" class="form-control" id="hp" readonly value="{{$no_hp}}" name="no_hp" placeholder="08***" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="jln." autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Plat Mobil</label>
                        <input type="text" class="form-control" id="plat" readonly value="{{$booking->no_plat}}" name="no_plat" placeholder="-----" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="mobil" readonly value="{{$booking->nama_mobil}}" name="nama_mobil" placeholder="-----" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="input-icon mb-2">
                                <label class="form-label">Tanggal Berangkat</label>
                                <input class="form-control " id="go" name="booking_in" type="date" placeholder="Select a date" id="datepicker-icon" >
                                <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                </span>
                              </div>
                            </div>
                            <div class="col-6">
                                <div class="input-icon mb-2">
                                    <label class="form-label">Tanggal Kembali</label>
                                    <input class="form-control " id="back" name="booking_out" type="date" placeholder="Select a date" id="datepicker-icon" >
                                    <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    </span>
                                  </div>
                            </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" name="pesan" rows="5">

                        </textarea>
                      </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary w-100">Rental</button>
                    </div>
                  </form>
                </div>

              </div>
              <div class="text-center text-muted mt-3">
                <a href="/home" tabindex="-1">Kembali</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
          event.preventDefault(); // Mencegah form dari pengiriman default

          // Ambil nilai input field
          var phoneNumber = +6281265117697;

          // Panggil fungsi untuk mengirim data ke WhatsApp
          sendWhatsAppMessage(phoneNumber);
        });

        function sendWhatsAppMessage(phoneNumber) {
          // Format URL WhatsApp dengan nomor penerima dan pesan
          $nama = document.getElementById('nama').value;
          $hp = document.getElementById('hp').value;
          $alamat = document.getElementById('alamat').value;
          $mobil = document.getElementById('mobil').value;
          $go = document.getElementById('go').value;
          $back = document.getElementById('back').value;

        $format ="Horas MarsadaTrip"."<br>"+
                "Saya :"+$nama + "<br>"
                "No.Hp :"+$hp + "<br>"
                "Alamat :"+$alamat+"<br>"
                "Ingin memesan mobil :"+$mobil+"<br>"
                "Tanggal berangkat : "+$go+"<br>"
                "Tanggal Kembali :"+$back+"<br>"
                "Terimakasih";

          var whatsappUrl = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + $format;

          // Buka WhatsApp di browser pengguna
          window.open(whatsappUrl);
        }
      </script>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{asset('tabler/dist/js/tabler.min.js?1674944402')}}" defer></script>
    <script src="{{asset('tabler/dist/js/demo.min.js?1674944402')}}" defer></script>
  </body>
</html>
