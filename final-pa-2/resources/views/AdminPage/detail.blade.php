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
                                        @if($idPemesanan->status == 0)
                                        <form action="{{ url('/pemesanan-status/'.$idPemesanan->id_pesanan) }}" method="POST">
                                            @csrf
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Nama Pemesan</th>
                                                <td>
                                                    <input type="text" name="id_pesanan" value="{{$idPemesanan->id_pesanan}}" hidden>
                                                    <input type="text" name="namaPemesan" value="{{ $idPemesanan->nama_pemesan }} "></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Mobil</th>
                                                <td><input type="text" name="namaMobil" value="{{ $idPemesanan->nama_mobil }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Mulai</th>
                                                <td><input type="text" name="boIn" value="{{ $idPemesanan->booking_in }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Akhir</th>
                                                <td><input type="text" name="boOut" value="{{ $idPemesanan->booking_out }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Harga Perhari</th>
                                                <td><input  name="hargaHari" value="12"></td>
                                            </tr>
                                            <tr>
                                                @php
                                                $diffInDays = 0;
                                                $bookingIn = strtotime($idPemesanan->booking_in);
                                                $bookingOut = strtotime($idPemesanan->booking_out);

                                                $diffInSeconds = $bookingOut - $bookingIn;
                                                $diffInDays = floor($diffInSeconds / (60 * 60 * 24));
                                                // dd($diffInDays);
                                                @endphp

                                                <th>Jumlah Hari</th>
                                                <td><input type="number" name="totalHari" value="{{ $diffInDays }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Unit</th>
                                                <td><input type="number" name="jumlahUnit" value="1"></td>
                                            </tr>

                                            <tr>
                                                <th>Menggunakan Sopir</th>
                                                <td><input type="text" name="asalSopir" value="Marsada"></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Sopir</th>
                                                <td><input type="text" name="namaSopir" value="Marsada"></td>
                                            </tr>
                                            <tr>
                                                <th>Asal Mobil</th>
                                                <td><input type="text" name="asalMobil" value="Marsada"></td>
                                            </tr>
                                            <tr>
                                                <th>Dikson</th>
                                                <td><input type="text" name="dikson" value="diskon"></td>
                                            </tr>
                                            <tr>
                                                <th>Total Harga Beli</th>
                                                <td><input type="text" name="totalHargaBeli" value="1"></td>
                                            </tr>
                                            <tr>
                                                <th>Bukti Pembayaran</th>
                                                <td><input type="text" value="image"></td>
                                            </tr>
                                            <tr>
                                                <th>Pengeluaran Marsada</th>
                                                <td><input type="number" name="pengeluaran" value="5000000"></td>
                                            </tr>
                                            <tr>
                                                <th>Catatan</th>
                                                <td><input type="text" name="catatan" value="okealh"></td>
                                            </tr>
                                        </table>


                                                <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                            </form>
                                            <form action="{{ url('/pemesanan-status/delete/'.$idPemesanan->id_pesanan) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Tolak</button>
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
