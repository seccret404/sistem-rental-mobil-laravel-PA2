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
    <title>Pemesanan Marsadatrip</title>
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

                              <strong class="text-primary" style="padding-left: 25px;padding-bottom:6px">Ingin Melakukan Rental? </strong><strong>  Perhatikan Tips Berikut.</strong><br>


                              <ol style="text-align: justify">
                                <li>
                                   Masukkanlah alamat tempat tinggal anda dengan benar dan jujur.
                                </li><br>
                                <li>
                                   Perhatikan data tanggal keberangkatan dan kepulangan anda.
                                </li>
                                <li>
                                    Jika memiliki pesan kepada Marsadatrip, silahkan tinggalkan pesan anda pada form <i>pesan.</i>
                                </li>
                                <li>
                                    Terakhir, dengan klik <b>Rental</b>data akan segera dikirimkan ke Marsadatrip melalui whatsapp untuk melakukan konfirmasi dan negoisasi harga.
                                </li>
                                <li class="bg-light" style="list-style-type: none;padding:5px">
                                   <strong > Untuk melakukan Transaksi DP, kirimkan ke nomor VA Shopee dibawah ini:</strong> <br>
                                    <p class="text-primary  opacity-100">No. VA :  8807081397739993</p><p class="text-primary">A/N : Gilbert Marpaung</p>
                                    <div class="text-dark"></div>

                                </li>

                            </ol>
                            <strong><h3 class="text-center ">Horas! Marsadatrip</h31></strong>


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
                 <div class="alert">
                    <p class="text-danger">{{Session::get('warning')}}</p>
                 </div>

                 @endif
                  <form action="{{ url('/booking/proses/'.$booking->id_mobil) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="email" class="form-control" id="nama" readonly value="{{$nama}}" name="nama" placeholder="nama...." autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <input type="hidden" class="form-control" id="nama" readonly value="{{$booking->id_mobil}}" name="id_mobil">
                      </div>
                    <div class="mb-3">
                        <label class="form-label">No Telepon</label>
                        <input type="email" class="form-control" id="hp" readonly value="{{$no_hp}}" name="no_hp" placeholder="08***" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Nama Mobil</label>
                        <input type="text" class="form-control" id="mobil" readonly value="{{$booking->nama_mobil}}" name="nama_mobil" placeholder="-----" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tarif Perhari</label>
                        <input type="text" class="form-control" id="tarif" readonly value="{{$booking->harga_perhari}}" name="harga_perhari" placeholder="-----" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Alamat Pelanggan</label>
                        <input type="text" class="form-control" id="alamat" required name="alamat" placeholder="jln." autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Jumlah Unit</label>
                        <input type="number" class="form-control" id="unit" required name="jumlah_unit" min="1" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <input type="text" value="{{$booking->id_mobil}}" hidden name="id_mobil">
                        <input type="text" class="form-control" id="plat" readonly value="{{$booking->asal_mobil}}" name="asal_mobil" hidden autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <div class="input-icon mb-2">
                                <label class="form-label">Tanggal Berangkat</label>
                                <input class="form-control " id="booin" required name="booking_in" onchange="hitung()" type="date"  placeholder="Select a date" id="datepicker-icon" >
                                <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                </span>
                              </div>
                            </div>
                            <div class="col-6">
                                <div class="input-icon mb-2">
                                    <label class="form-label">Tanggal Kembali</label>
                                    <input class="form-control " id="booout" required name="booking_out"type="date" onchange="hitung()" placeholder="Select a date" id="datepicker-icon" >
                                    <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    </span>
                                  </div>
                            </div>
                        </div>
                      </div>
                      <p id="hasil"></p>

                      <script>
                        function hitung() {
                            var booIn = new Date(document.getElementById("booin").value);
                            var booOut = new Date(document.getElementById("booout").value);
                            var hp = document.getElementById("tarif").value;
                            var unit = document.getElementById("unit").value;

                            // Menghitung selisih hari
                            var selisihHari = (booOut - booIn) / (1000 * 3600 * 24);

                            // Mengalikan dengan 3
                            var hasil = (selisihHari * hp * unit)/2;

                            var hasilRupiah = hasil.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });

                            // Menampilkan hasil di HTML
                            document.getElementById("hasil").textContent = "Total DP yang harus Dibayarkan: " + hasilRupiah;
                        }
                        </script>
                      <div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                    <div class="mb-3">
                                        <div class="form-label">Mengunakan Sopir Marsadatrip</div>
                                        <div>
                                          <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="Marsada" name="asal_sopir" checked="">
                                            <span class="form-check-label">Ya</span>
                                          </label>
                                          <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"value="Rentaler" name="asal_sopir">
                                            <span class="form-check-label">Tidak</span>
                                          </label>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                      <img src="{{  url('asset/mobil/'.$booking->gambar) }}" alt="{{  url('asset/mobil/'.$booking->gambar) }}" style="display: none;" name="image">
                      <div class="mb-3">
                        <label class="form-label">Bukti Transaksi</label>
                        <input type="file" class="form-control" required name="bukti_dp"  autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" name="pesan" rows="5">
                        </textarea>
                      </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary w-100">Rental</button>
                    </div><div class="text-center text-muted mt-3">
                <a href="/" tabindex="-1">Kembali</a>
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
