@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">
                    Data Pemesanan
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
                        <div class="row mt-4">
                            <table class="table table-bordered">
                                <div class="col-12">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pelangkan</th>
                                            <th>Nama Mobil</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 1;
                                        @endphp
                                         @foreach ($pemesananList as $item)
                                        @if($item->status == 0)
                                        <tr>
                                            <td>{{$counter }}</td>
                                            <td>{{$item->nama_pemesan }}</td>
                                            <td>{{$item->nama_mobil}}</td>
                                            <td>{{$item->booking_in}}</td>
                                            <td>{{$item->booking_out}}</td>
                                            <td>
                                                @if($item->status == 0)
                                                    <a href="{{ url('/pemesanan/'.$item->id_pesanan) }}"><button type="submit" class="btn btn-primary">Detail</button></a>
                                                @else

                                                    <button type="submit" class="btn btn-primary" disabled >Terkonfirmasi</button>

                                                @endif
                                            </td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endif
                                        @php
                                            $counter++;
                                        @endphp
                                        @endforeach

                                    </tbody>
                            </table>
                        </div>
                        <div class="col-12">
                            <div class="row row-cards row-deck">
                            @foreach ($pemesananList as $p)
                                @if($p->status !=0)
                                <div class="col-4">
                                    <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">{{ $p->nama_mobil }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{  url('asset/mobil/'.$p->cars->gambar) }}" style="height:200px !important"
                                    alt="Image" class="img-fluid">
                                    </div>
                                    <div class="card-footer">
                                        <h5>Nama Pemesan : {{ $p->nama_pemesan }}</h5>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-info">Sedang Berjalan</button>
                                    </div>
                                 </div>
                                </div>
                                @endif
                            @endforeach
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

