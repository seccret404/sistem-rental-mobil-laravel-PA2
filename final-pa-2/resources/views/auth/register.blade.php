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
                    <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="marsada.png" height="170px" alt=""></a>
              </div>
                  <h2 class="h2 text-center mb-4">Daftar Akun</h2>
                 @if (Session::get('warning'))
                 <div class="alert bg-warning">
                    <p>{{Session::get('warning')}}</p>
                 </div>

                 @endif
                  <form action="/registered" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" required placeholder="nama...." autocomplete="off">
                      </div>


                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" required placeholder="your@email.com" autocomplete="on">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No Telepon</label>
                        <input type="text" class="form-control reunded-top @error('no_hp') is-invalid @enderror" name="no_hp" required placeholder="08***" autocomplete="off">
                        @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="mb-2">
                      <label class="form-label">
                        Password
                      </label>
                      <div class="input-group input-group-flat">
                        <input type="password" name="password" class="form-control reunded-top @error('password') is-invalid @enderror" required  placeholder="Your password"  autocomplete="off">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary w-100">register</button>
                    </div>
                    <div class="text-center text-muted mt-3">
                        Sudah memiliki akun? <a href="/" tabindex="-1">Masuk</a>
                      </div>
                  </form>
                </div>
                {{-- <div class="hr-text">or</div> --}}

            </div>
          </div>
          {{-- <div class="col-lg d-none d-lg-block">
            <img src="{{asset('tabler/static/illustrations/undraw_secure_login_pdn4.svg')}}" height="300" class="d-block mx-auto" alt="">
          </div> --}}
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{asset('tabler/dist/js/tabler.min.js?1674944402')}}" defer></script>
    <script src="{{asset('tabler/dist/js/demo.min.js?1674944402')}}" defer></script>
  </body>
</html>
