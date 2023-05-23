@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Mobil
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
                                <a href="#" class="btn btn-secondary" id="tambah_karyawan" @disabled(true)>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mailbox" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 21v-6.5a3.5 3.5 0 0 0 -7 0v6.5h18v-6a4 4 0 0 0 -4 -4h-10.5"></path>
                                        <path d="M12 11v-8h4l2 2l-2 2h-4"></path>
                                        <path d="M6 15h1"></path>
                                     </svg>
                                    Data Feddback User </a>
                            </div>
                        </div>



                        <div class="row mt-4">
                            <table class="table table-bordered">
                                <div class="col-12">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelanggan</th>
                                            <th>email</th>
                                            <th>Pesan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feed as $item)
                                        <tr>
                                            <td>{{$loop->iteration }}</td>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->pesanku}}</td>

                                        <td>

                                                 <form method="POST" action="/feedback/{{$item->id_feed}}/delete" class="mt-2">
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


@endsection

@push('myscript')
<script>
    $(function () {

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

    })


</script>
@endpush

