@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Administrasi
                </div>
                <h2 class="page-title">
                    Data Administrasi
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
                                    </svg>Tambah Data Administrasi </a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <form action="/karyawan" method="get">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <input type="text" name="nama_karyawan" class="form-control"
                                                    placeholder="Nama rentaler" value="{{Request('nama_karyawan')}}">
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
                        </div>


                        <div class="row mt-4">
                            <table class="table table-bordered">
                                <div class="col-12">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Rentaler</th>
                                            <th>Nama Mobil</th>
                                            <th>Asal Sopir</th>
                                            <th>Dana DP</th>
                                            <th>Harga Jual</th>
                                            <th>Asal Unit</th>
                                            <th>Type Mobil</th>
                                            <th>Total Harga Beli</th>
                                            <th>Pengeluaran</th>
                                            <th>Deskripsi</th>
                                            <th>Profit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admin as $item)
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{$item->nama_rentaler}}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->sopir}}</td>
                                            <td>Rp.{{number_format($item->dana_dp)}}</td>
                                            <td>Rp.{{number_format($item->harga_jual)}}</td>
                                            <td>{{$item->asal_unit}}</td>
                                            <td>{{$item->tipe_mobil}}</td>
                                            <td>Rp.{{number_format($item->harga_beli)}}</td>
                                            <td>Rp.{{number_format($item->pengeluaran)}}</td>
                                            <td>{{$item->deskripsi}}</td>
                                            <td>p</td>
                                             <td>
                                                <a href="/admin/edit/{{$item->id}}" class="btn btn-primary" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 20l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4z"></path>
                                                    <path d="M13.5 6.5l4 4"></path>
                                                    <path d="M16 18h4m-2 -2v4"></path>
                                                 </svg> </a>
                                               <form method="POST" action="/admin/{{$item->id}}/delete" class="mt-2">
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
                                        <tr>
                                            <td>Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp.{{number_format($tp)}}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
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
                <h5 class="modal-title">Tambah Data Administrasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/administrasiadd" enctype="multipart/form-data" method="POST" id="form_karyawan">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                        <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="nik" name="nama_rentaler" class="form-control"
                                    placeholder="nama rentaler..">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="form-gorup">
                                <div class="form-label">Nama Mobil</div>

                                <select name="nama" id="kode_dept" class="form-select tomselected ">
                                    <option value="">--masukkan data--</option>
                                    @foreach ($nama as $item)
                                    <option {{Request('nama_mobil')== $item->nama_mobil ? 'selected' : ''}}
                                        value="{{$item->nama_mobil}}">{{$item->nama_mobil}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-ipad-dollar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M13 21h-7a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                        <path d="M9 18h4"></path>
                                        <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                        <path d="M19 21v1m0 -8v1"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="nama_lengkap" name="dana_dp" class="form-control"
                                    placeholder="Dana DP">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="8.5" cy="8.5" r="1" fill="currentColor"></circle>
                                        <path d="M4 7v3.859c0 .537 .213 1.052 .593 1.432l8.116 8.116a2.025 2.025 0 0 0 2.864 0l4.834 -4.834a2.025 2.025 0 0 0 0 -2.864l-8.117 -8.116a2.025 2.025 0 0 0 -1.431 -.593h-3.859a3 3 0 0 0 -3 3z"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="no_hp" name="harga_jual" class="form-control"
                                    placeholder="Harga jual..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-current-location" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                        <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0"></path>
                                        <path d="M12 2l0 2"></path>
                                        <path d="M12 20l0 2"></path>
                                        <path d="M20 12l2 0"></path>
                                        <path d="M2 12l2 0"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="nama_lengkap" name="asal_unit" class="form-control"
                                    placeholder="Asal unit">
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
                                        <input class="form-check-input" type="radio" value="truk" name="tipe_mobil">
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
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <div class="mb-3">
                                    <div class="form-label">Asal Sopir</div>
                                    <div>
                                      <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="MarsadaTrip" name="sopir" checked="">
                                        <span class="form-check-label">MarsadaTrip</span>
                                      </label>
                                      <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="Rentaler" name="sopir">
                                        <span class="form-check-label">Rentaler</span>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="8.5" cy="8.5" r="1" fill="currentColor"></circle>
                                        <path d="M4 7v3.859c0 .537 .213 1.052 .593 1.432l8.116 8.116a2.025 2.025 0 0 0 2.864 0l4.834 -4.834a2.025 2.025 0 0 0 0 -2.864l-8.117 -8.116a2.025 2.025 0 0 0 -1.431 -.593h-3.859a3 3 0 0 0 -3 3z"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="no_hp" name="harga_beli" class="form-control"
                                    placeholder="Harga beli..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="8.5" cy="8.5" r="1" fill="currentColor"></circle>
                                        <path d="M4 7v3.859c0 .537 .213 1.052 .593 1.432l8.116 8.116a2.025 2.025 0 0 0 2.864 0l4.834 -4.834a2.025 2.025 0 0 0 0 -2.864l-8.117 -8.116a2.025 2.025 0 0 0 -1.431 -.593h-3.859a3 3 0 0 0 -3 3z"></path>
                                     </svg>
                                </span>
                                <input type="text" value="" id="no_hp" name="pengeluaran" class="form-control"
                                    placeholder="Pengeluaran..">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" rows="5"></textarea>
                              </div>
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
            var nik = $(this).attr('nik')
            $.ajax({
                type:'POST'
                , url:'/karyawan/edit'
                ,cache:false
                ,data:{
                    _token: "{{ csrf_token() }}"
                    ,nik:nik
                },
                success:function(respond){
                    $("#loadeditform").html(respond);
                }

            })
           $("#modaledit_karyawan").modal("show");


        });

        $("#form_karyawan").submit(function () {
            var nik = $("#nik").val();
            var nama_lengkap = $("#nama_lengkap").val();
            var jabatan = $("#jabatan").val();
            var no_hp = $("#no_hp").val();
            var gambar = $("#gambar").val();
            var kode_dept = $("#form_karyawan").find("#kode_dept").val();

            if (nik == "") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'Nik Harus Diisi',
                    showConfirmButton: true,
                    timer: 2000
                }).then((result) => {
                    $("#nik").focus()
                });;
                return false;
            } else if (nama_lengkap == "") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'Nama Lengkap Harus Diisi',
                    showConfirmButton: true,
                    timer: 2000
                }).then((result) => {
                    $("#nik").focus()
                });;
                return false;
            } else if (jabatan == "") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'Jabatan Harus Diisi',
                    showConfirmButton: true,
                    timer: 2000
                }).then((result) => {
                    $("#nik").focus()
                });;
                return false;
            } else if (no_hp == "") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'No.hp Harus Diisi',
                    showConfirmButton: true,
                    timer: 2000
                }).then((result) => {
                    $("#nik").focus()
                });;
                return false;
            } else if (gambar == "") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'Gambar Harus Diisi',
                    showConfirmButton: true,
                    timer: 2000
                }).then((result) => {
                    $("#nik").focus()
                });;
                return false;
            } else if (kode_dept == "") {
                Swal.fire({
                    position: 'top-center',
                    icon: 'warning',
                    title: 'Departemen Harus Diisi',
                    showConfirmButton: true,
                    timer: 2000
                }).then((result) => {
                    $("#nik").focus()
                });;
                return false;
            }

        });
    })

</script>
@endpush

