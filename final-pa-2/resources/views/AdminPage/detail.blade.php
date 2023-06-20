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
                                                    <input type="text" class="form-control" name="id_pesanan" value="{{$idPemesanan->id_pesanan}}" hidden>
                                                    <input type="text" class="form-control" name="namaPemesan" value="{{ $idPemesanan->nama_pemesan }} "></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Mobil</th>
                                                <td><input type="text" class="form-control" name="namaMobil" value="{{ $idPemesanan->nama_mobil }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Mulai</th>
                                                <td><input type="text" class="form-control" name="boIn" value="{{ $idPemesanan->booking_in }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Akhir</th>
                                                <td><input type="text" class="form-control" name="boOut" value="{{ $idPemesanan->booking_out }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Harga Perhari</th>
                                                <td><input  name="hargaHari" class="form-control" value="{{$idPemesanan->harga_perhari}}"></td>
                                            </tr>
                                            <tr>
                                                @php
                                                $diffInDays = 0;
                                                $bookingIn = strtotime($idPemesanan->booking_in);
                                                $bookingOut = strtotime($idPemesanan->booking_out);

                                                $diffInSeconds = $bookingOut - $bookingIn;
                                                $diffInDays = floor($diffInSeconds / (60 * 60 * 24));
                                                // dd($diffInDays);

                                                $dp = ($idPemesanan->harga_perhari * $idPemesanan->jumlah_unit * $diffInDays)/2;

                                                $harga = ($idPemesanan->harga_perhari  * $idPemesanan->jumlah_unit * $diffInDays) - $dp;

                                                @endphp
                                                <th>Jumlah Hari</th>
                                                <td><input type="number" class="form-control" name="totalHari" value="{{ $diffInDays }}"></td>
                                            </tr>
                                            <tr>
                                                <th>Jumlah Unit</th>
                                                <td><input type="number" class="form-control" name="jumlahUnit" value="{{$idPemesanan->jumlah_unit}}"></td>
                                            </tr>

                                            <tr>
                                                <th>Menggunakan Sopir</th>
                                                <td><input type="text" class="form-control" name="asalSopir" value="{{$idPemesanan->asal_mobil}}"></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Sopir</th>
                                                <td><input type="text" required class="form-control" name="namaSopir" value=""> </td>
                                            </tr>
                                            <tr>
                                                <th>Asal Mobil</th>
                                                <td><input type="text" class="form-control" name="asalMobil" value="{{$idPemesanan->asal_mobil}}"></td>
                                            </tr>
                                            <tr>
                                                <th>Diskon</th>
                                                <input type="number" name="" id="" hidden value="{{$harga}}">
                                                <td><input type="number" class="form-control" id="diskon" name="diskon" value="" placeholder="masukkan angka persenannya saja"></td>
                                            </tr>

                                            <tr>
                                                <th>Total Dana DP</th>
                                                <td><input type="number" class="form-control" name="dp" value="{{$dp}}" placeholder=""></td>
                                            </tr>

                                            <tr>
                                                <th>Total Harga Beli</th>
                                                <td><input type="text" class="form-control" name="total" readonly id="total" value="" placeholder="0"></td>
                                            </tr>
                                            <script>
                                                // Mendapatkan referensi elemen input diskon dan total
                                                var diskonInput = document.getElementById('diskon');
                                                var totalInput = document.getElementById('total');

                                                // Mengatur event listener untuk perubahan pada input diskon
                                                diskonInput.addEventListener('input', function() {
                                                    var diskon = parseFloat(diskonInput.value);
                                                    var harga = {{ $harga }}; // Ambil nilai harga dari Laravel

                                                    // Menghitung ulang nilai total berdasarkan diskon
                                                    var hasil = harga * ((diskon / 100));
                                                    var total = harga - hasil;
                                                    var totalFormatted = total.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                                                    totalInput.value = totalFormatted;
                                                    // totalInput.value = total.toFixed(0); // Menampilkan total dengan 2 angka desimal
                                                });
                                            </script>
                                            <tr>
                                                <th>Bukti Pembayaran</th>
                                                <td><a href="{{url('asset/pemesanan/'.$idPemesanan->bukti_dp)}}">Lihat Bukti Pembayaran</a>
                                                    <input type="text" class="form-control" name="bukti_dp" hidden value="{{url('asset/pemesanan/'.$idPemesanan->bukti_dp)}}"></td>
                                            </tr>
                                            <tr>
                                                <th>Pengeluaran Marsada</th>
                                                <td><input type="number" class="form-control" name="pengeluaran"></td>
                                            </tr>
                                            <tr>
                                                <th>Catatan</th>
                                                <td><textarea class="form-control" name="catatan" value=""></textarea></td>
                                            </tr>
                                        </table>


                                                <button type="submit" class="btn btn-primary ">Konfirmasi</button>
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
