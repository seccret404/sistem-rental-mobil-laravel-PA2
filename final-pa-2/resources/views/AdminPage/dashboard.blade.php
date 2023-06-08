@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Data
                </div>
                <h2 class="page-title">
                    MarsadaTrip
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-lg-8">
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <span class="avatar avatar-xl rounded bg-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-businessplan" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M16 6m-5 0a5 3 0 1 0 10 0a5 3 0 1 0 -10 0"></path>
                                            <path d="M11 6v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                            <path d="M11 10v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                            <path d="M11 14v4c0 1.657 2.239 3 5 3s5 -1.343 5 -3v-4"></path>
                                            <path d="M7 9h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                            <path d="M5 15v1m0 -8v1"></path>
                                         </svg></span>
                                </div>
                                <div class="card-title mb-1">Rp.5.000.000</div>
                                <div class="text-muted">Profit Bulan ini</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <span class="avatar avatar-xl rounded bg-warning"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-1m-2.82 1.171a2 2 0 0 0 1.82 2.829h1m2.824 2.822a2 2 0 0 1 -1.824 1.178h-2a2 2 0 0 1 -1.8 -1"></path>
                                        <path d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73"></path>
                                        <path d="M12 6v2m0 8v2"></path>
                                        <path d="M3 3l18 18"></path>
                                     </svg> </span>
                                </div>
                                <div class="card-title mb-1">Rp.{{number_format($tp)}}</div>
                                <div class="text-muted">Pengeluaran Bulan ini</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

{{-- modal add --}}

@endsection

@push('myscript')
<script>
    $(function () {
        $("#tambah_karyawan").click(function () {
            $("#modal_karyawan").modal("show");


        });
        $(".deletecom").click(function (e) {
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
                type: 'POST',
                url: '/karyawan/edit',
                cache: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    nik: nik
                },
                success: function (respond) {
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
