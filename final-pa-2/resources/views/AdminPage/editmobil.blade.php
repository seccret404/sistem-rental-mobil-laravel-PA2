@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">
                    Data Mobil
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="modal modal-blur fade show" id="modal-large" tabindex="-1" role="dialog" aria-modal="true"
            style="display: block;">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/mobil/edit/' .$mobiledit->id_mobil) }}" method="POST" >
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-12">

                                    <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-ambulance" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path
                                                    d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5">
                                                </path>
                                                <path d="M6 10h4m-2 -2v4"></path>
                                            </svg>
                                        </span>
                                        <input type="text" id="nik" value="{{$mobiledit->nama_mobil}}" name="nama_mobil"
                                            class="form-control" placeholder="Nama mobil">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-map-pin-exclamation" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                                <path
                                                    d="M15.005 19.31l-1.591 1.59a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 13.592 -4.638">
                                                </path>
                                                <path d="M19 16v3"></path>
                                                <path d="M19 22v.01"></path>
                                            </svg>
                                        </span>
                                        <input type="text" id="nama_lengkap" value="{{$mobiledit->lokasi}}"
                                            name="lokasi" class="form-control" placeholder="lokasi">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-helicopter-landing" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                                </path>
                                                <path d="M9 8l0 8"></path>
                                                <path d="M9 12l6 0"></path>
                                                <path d="M15 8l0 8"></path>
                                            </svg>
                                        </span>
                                        <input type="text" id="jabatan" value="{{$mobiledit->no_plat}}" name="no_plat"
                                            class="form-control" placeholder="no_plat..">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-armchair" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z">
                                                </path>
                                                <path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5"></path>
                                                <path d="M6 19v2"></path>
                                                <path d="M18 19v2"></path>
                                            </svg>
                                        </span>
                                        <input type="number" id="jabatan" value="{{$mobiledit->kapasitas}}"
                                            name="kapasitas" min="1" class="form-control" placeholder="jumlah kursi">
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-2">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="row container">
                                        <div class="col-6 text-center"><a href="/mobil" class="btn btn-danger w-50 text-left" >Batal</a></div>
                                        <div class="col-6 text-center"><button class="btn btn-primary w-50 jus" type="submit">Simpan</button></div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>








@endsection

@push('myscript')
@endpush
