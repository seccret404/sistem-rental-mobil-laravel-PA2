@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">
                    Data Detail Pemesanan
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
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Nama Pemesan :</th>
                                                <td>{{ $idPemesanan->nama_pemesan }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama Mobil :</th>
                                                <td>{{ $idPemesanan->nama_mobil }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Mulai :</th>
                                                <td>{{ $idPemesanan->booking_in }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Akhir :</th>
                                                <td>{{ $idPemesanan->booking_out }}</td>
                                            </tr>
                                        </table>

                                        @if($idPemesanan->status == 0)
                                            <form action="{{ url('/pemesanan-status/'.$idPemesanan->id_pesanan) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                            </form>
                                        @else
                                            <button type="button" disabled  class="btn btn-success">Terkonfirmasi</button>
                                        @endif
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
