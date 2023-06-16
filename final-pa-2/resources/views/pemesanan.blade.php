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
  <body>
    <script src="{{asset('tabler/dist/js/demo-theme.min.js?1674944402')}}"></script>
    <div class="mt-2">
      <div class="container">
        <div class="row  ">
            <div class="col-5 bg-white">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{asset('/marsada.png')}}" width="200px"  alt="">
                    </div>

                </div>
                <div class="row">
                    <div class="col">

                            <strong>Ingin Rental Mobil di Toba ? Perhatikan Tips Berikut.</strong><br>
                            <ol>
                                <li>
                                    Anda membutuhkan kendaraan selama di Toba? Rental Mobil Toba bisa menjadi solusinya.
                                    Tersedia banyak armada yang bisa dipilih sesuai kebutuhan dengan berbagai rute serta medan jalanan.
                                </li>
                                <li>
                                    Apalagi, untuk memilih rental kendaraan terbaik, perlu me   mpertimbangkan berbagai hal krusial.
                                    Jangan sampai sudah mengeluarkan uang namun tidak mendapatkan fasilitas dan kenyamanan seperti yang diharapkan.
                                     Jadi, simak ulasan di bawah ini agar perjalanan nyaman dan menyenangkan.

                                </li>
                            </ol>


                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.440922730705!2d99.12347567331184!3d2.357668857511405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e013658edd177%3A0x75a8ccf82583e38b!2sJl.%20Siraja%20Deang%20Toruan%2C%20Ompu%20Raja%20Hutapea%2C%20Kec.%20Laguboti%2C%20Toba%2C%20Sumatera%20Utara%2022381!5e0!3m2!1sid!2sid!4v1686879052660!5m2!1sid!2sid" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
          <div class="col-7 bg-white">
            <div class="container">

              <div class="card">
                <div class="card-body">

              <br>
                  <h2 class="h2 text-center mb-4">Isi Data Rental</h2>
                 @if (Session::get('warning'))
                 <div class="alert bg-warning">
                    <p>{{Session::get('warning')}}</p>
                 </div>

                 @endif
                  <form action="/booking/proses" method="post" id="myform"  autocomplete="off">
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
                        <input type="text" class="form-control" id="alamat" required name="alamat" placeholder="jln." autocomplete="off">
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
                                <input class="form-control " id="go" required name="booking_in" type="date" placeholder="Select a date" id="datepicker-icon" >
                                <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                </span>
                              </div>
                            </div>
                            <div class="col-6">
                                <div class="input-icon mb-2">
                                    <label class="form-label">Tanggal Kembali</label>
                                    <input class="form-control " id="back" required name="booking_out" type="date" placeholder="Select a date" id="datepicker-icon" >
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
                    </div><div class="text-center text-muted mt-3">
                <a href="/home" tabindex="-1">Kembali</a>
              </div>
                  </form>
                </div>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <script src="{{asset('tabler/dist/js/tabler.min.js?1674944402')}}" defer></script>
    <script src="{{asset('tabler/dist/js/demo.min.js?1674944402')}}" defer></script>
  </body>
</html>
