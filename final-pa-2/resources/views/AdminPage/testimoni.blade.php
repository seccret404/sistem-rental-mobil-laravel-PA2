@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">
                    Data Testimoni
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
                                    </svg>Tambah Data </a>
                            </div>
                        </div>
                            {{-- <div class="row mt-2">
                                <div class="col-12">
                                    <form action="/karyawan" method="get">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input type="text" name="nama_karyawan" class="form-control"
                                                        placeholder="Nama Pelanggan" value="{{Request('nama_karyawan')}}">
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
                                            <th>Nama Pelangkan</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($tes as $item)
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{$item->nama_pelanggan}}</td>
                                            <td>{{$item->deskripsi}}</td>
                                            <td>@if ($item)
                                                <img src="{{  url('asset/testimoni/'.$item->gambar) }}" alt="{{ $item->gambar }}" width="80px" height="80px">
                                            @else
                                                <p>Tidak ada item yang ditemukan</p>
                                            @endif</td>
                                            <td>
                                                 <form method="POST" action="/testimoni/{{$item->id}}/delete" class="mt-2">
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
                <h5 class="modal-title">Tambah Data Testimoni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/testimoni-add" enctype="multipart/form-data" method="POST" id="form_karyawan">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-12">
                            <div class="form-gorup">
                                <div class="form-label">Nama Mobil</div>

                                <select name="nama_pelanggan" id="kode_dept" class="form-select tomselected " required>
                                    <option value="">--masukkan data--</option>
                                    @foreach ($pemesanan as $item)
                                    <option {{Request('nama_pemesan')== $item->nama_pemesan ? 'selected' : ''}}
                                        value="{{$item->id_pesanan}}">{{$item->nama_pemesan}} / Rental pada : {{$item->booking_in}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="form-label">Gambar</div>
                            <input type="file" id="gambar" name="gambar" class="form-control">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" rows="5" name="deskripsi"></textarea>
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

