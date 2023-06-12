@extends('admin.dash')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Pemesanan
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 1;
                                        @endphp
                                         @foreach ($pemesananList as $item)
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
                                                    <button type="button" disabled class="btn btn-success">Terkonfirmasi</button></a>
                                                @endif
                                            </td>
                                        </tr>
                                        @php
                                            $counter++;
                                        @endphp
                                        @endforeach
                                        
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

