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
        <div class="row">
            <div class="col-12">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="r0w">
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
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-primary" id="tambah_karyawan"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                    </svg>Tambah Mobil </a>
                            </div>
                        </div>
                        {{-- <div class="row mt-2">
                            <div class="col-12">
                                <form action="/karyawan" method="get">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="text" name="nama_mobil" class="form-control"
                                                    placeholder="Nama Karyawan" value="{{Request('nama_karyawan')}}">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-search" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                                        <path d="M21 21l-6 -6"></path>
                                                    </svg> Cari
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div> --}}


                        <div class="row mt-4">
                            <table class="table table-bordered">
                                <div class="col-12">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mobil</th>
                                            <th>Tipe Mobil</th>
                                            <th>No Plat</th>
                                            <th>Lokasi</th>
                                            <th>Jumlah Kursi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mobil as $item)
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{$item->nama_mobil}}</td>
                                            <td>{{$item->tipe_mobil}}</td>
                                            <td>{{$item->no_plat}}</td>
                                            <td>{{$item->lokasi}}</td>
                                            <td>{{$item->kapasitas}}</td>
                                        <td>
                                                <a href="/mobil/edit/{{$item->id_mobil}}" class=" btn btn-primary" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4z"></path>
                                                    <path d="M13.5 6.5l4 4"></path>
                                                    <path d="M16 18h4m-2 -2v4"></path>
                                                 </svg> </a>
                                                 <form method="POST" action="/mobil/{{$item->id_mobil}}/delete" class="mt-2">
                                                    @csrf

                                                    <a class="btn btn-danger deletecom" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                         </svg>
                                                        </a>
                                                </form>
                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>


                    <div>
                        {{-- {{$karyawan->links('vendor\pagination\bootstrap-5')}}</div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{--modal edit --}}
<div class="modal modal-blur fade" id="modaledit_karyawan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="loadeditform">

            </div>

        </div>
    </div>
</div>
{{-- modal add --}}
<div class="modal modal-blur fade" id="modal_karyawan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Mobil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/mobiladd') }}" enctype="multipart/form-data" method="POST" id="form_karyawan">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ambulance" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                        <path d="M6 10h4m-2 -2v4"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="nik" name="nama_mobil" class="form-control"
                                    placeholder="Nama mobil">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-exclamation" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path d="M15.005 19.31l-1.591 1.59a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 13.592 -4.638"></path>
                                        <path d="M19 16v3"></path>
                                        <path d="M19 22v.01"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="nama_lengkap" name="lokasi" class="form-control"
                                    placeholder="lokasi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-helicopter-landing" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                        <path d="M9 8l0 8"></path>
                                        <path d="M9 12l6 0"></path>
                                        <path d="M15 8l0 8"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="jabatan" name="no_plat" class="form-control"
                                    placeholder="no_plat..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <div class="mb-3">
                                    <div class="form-label">Tipe Mobil</div>
                                    <div>
                                      <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="sedan" name="tipe_mobil" checked="">
                                        <span class="form-check-label">Sedan</span>
                                      </label>
                                      <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"value="truk" name="tipe_mobil">
                                        <span class="form-check-label">Truk</span>
                                      </label>
                                      <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="pickup" name="tipe_mobil">
                                        <span class="form-check-label">Pickup</span>
                                      </label>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <div class="mb-3">
                                    <div class="form-label">AC</div>
                                    <div>
                                      <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="Ya" name="ac" checked="">
                                        <span class="form-check-label">Ya</span>
                                      </label>
                                      <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio"value="Tidak" name="ac">
                                        <span class="form-check-label">Tidak</span>
                                      </label>

                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-armchair" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 11a2 2 0 0 1 2 2v2h10v-2a2 2 0 1 1 4 0v4a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 0 1 2 -2z"></path>
                                        <path d="M5 11v-5a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v5"></path>
                                        <path d="M6 19v2"></path>
                                        <path d="M18 19v2"></path>
                                     </svg>
                                </span>
                                <input type="number" value="" id="jabatan" name="kapasitas" min="1" class="form-control"
                                    placeholder="jumlah kursi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <div class="form-label">Gambar Mobil</div>
                            <input type="file" id="gambar" name="gambar" class="form-control">

                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="form-group">
                                <button class="btn btn-primary w-100" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@push('myscript')
<script>
    $(function () {
        $("#tambah_karyawan").click(function () {
            $("#modal_karyawan").modal("show");


        });
        $(".deletecom").click(function(e){
            var form = $(this).closest('form');
            e.preventDefault();
            Swal.fire({
                     title: 'Apakah anda yakin?',
                     text: "Ingin menghapus data ini!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#3085d6',
                     cancelButtonColor: '#d33',
                     confirmButtonText: 'Ya'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                      Swal.fire(

                       'Deleted!',
                       'Your file has been deleted.',
                        'success'
                     )
                     }
                    })
        });
        $(".edit").click(function () {
            var id_mobil = $(this).attr('id_mobil')
            $.ajax({
                type:'POST'
                , url:'/mobil/edit'
                ,cache:false
                ,data:{
                    _token: "{{ csrf_token() }}"
                    ,id_mobil:id_mobil
                },
                success:function(respond){
                    $("#loadeditform").html(respond);
                }

            })
           $("#modaledit_karyawan").modal("show");


        });

        // $("#form_karyawan").submit(function () {
        //     var nik = $("#nik").val();
        //     var nama_lengkap = $("#nama_lengkap").val();
        //     var jabatan = $("#jabatan").val();
        //     var no_hp = $("#no_hp").val();
        //     var gambar = $("#gambar").val();
        //     var kode_dept = $("#form_karyawan").find("#kode_dept").val();

        //     if (nik == "") {
        //         Swal.fire({
        //             position: 'top-center',
        //             icon: 'warning',
        //             title: 'Nik Harus Diisi',
        //             showConfirmButton: true,
        //             timer: 2000
        //         }).then((result) => {
        //             $("#nik").focus()
        //         });;
        //         return false;
        //     } else if (nama_lengkap == "") {
        //         Swal.fire({
        //             position: 'top-center',
        //             icon: 'warning',
        //             title: 'Nama Lengkap Harus Diisi',
        //             showConfirmButton: true,
        //             timer: 2000
        //         }).then((result) => {
        //             $("#nik").focus()
        //         });;
        //         return false;
        //     } else if (jabatan == "") {
        //         Swal.fire({
        //             position: 'top-center',
        //             icon: 'warning',
        //             title: 'Jabatan Harus Diisi',
        //             showConfirmButton: true,
        //             timer: 2000
        //         }).then((result) => {
        //             $("#nik").focus()
        //         });;
        //         return false;
        //     } else if (no_hp == "") {
        //         Swal.fire({
        //             position: 'top-center',
        //             icon: 'warning',
        //             title: 'No.hp Harus Diisi',
        //             showConfirmButton: true,
        //             timer: 2000
        //         }).then((result) => {
        //             $("#nik").focus()
        //         });;
        //         return false;
        //     } else if (gambar == "") {
        //         Swal.fire({
        //             position: 'top-center',
        //             icon: 'warning',
        //             title: 'Gambar Harus Diisi',
        //             showConfirmButton: true,
        //             timer: 2000
        //         }).then((result) => {
        //             $("#nik").focus()
        //         });;
        //         return false;
        //     } else if (kode_dept == "") {
        //         Swal.fire({
        //             position: 'top-center',
        //             icon: 'warning',
        //             title: 'Departemen Harus Diisi',
        //             showConfirmButton: true,
        //             timer: 2000
        //         }).then((result) => {
        //             $("#nik").focus()
        //         });;
        //         return false;
        //     }

        // });
    })

</script>
@endpush

