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
        <div class="modal modal-blur fade show" id="modal-large" tabindex="-1" role="dialog" aria-modal="true"
            style="display: block;">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/admin/edit/' .$admin->id) }}" enctype="multipart/form-data" method="POST" id="form_karyawan">
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
                                        <input type="text" value="{{$admin->nama_rentaler}}" id="nik" name="nama_rentaler" class="form-control"
                                            placeholder="nama rentaler..">
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="row mt-2">
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
                            </div> --}}
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
                                        <input type="text" value="{{$admin->dana_dp}}" id="nama_lengkap" name="dana_dp" class="form-control"
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
                                        <input type="text" value="{{$admin->harga_jual}}" id="no_hp" name="harga_jual" class="form-control"
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
                                        <input type="text" value="{{$admin->asal_unit}}" id="nama_lengkap" name="asal_unit" class="form-control"
                                            placeholder="Asal unit">
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
                                        <input type="text" value="{{$admin->harga_beli}}" id="no_hp" name="harga_beli" class="form-control"
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
                                        <input type="text" value="{{$admin->pengeluaran}}" id="no_hp" name="pengeluaran" class="form-control"
                                            placeholder="Pengeluaran..">
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
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
                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi</label>
                                        <textarea class="form-control" value="{{$admin->deskripsi}}" name="deskripsi" rows="5">{{$admin->deskripsi}}</textarea>
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
    </div>
</div>








@endsection

@push('myscript')
@endpush
