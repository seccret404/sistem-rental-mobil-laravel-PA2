<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class BookingController extends Controller
{
    public function index($id_mobil){
        $id = Auth::user()->id;
        $nama = Auth::user()->name;
        $no_hp = Auth::user()->no_hp;
        $booking = Mobil::find($id_mobil);

        return view('pemesanan',compact('booking','nama','no_hp'));
    }

    public function addbooking(Request $request, $id){

        $file = $request->file('bukti_dp');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/pemesanan';
        $file->move($tujuanFile,$namafile);
        $jumlah_unit = $request->jumlah_unit;
        $asal_mobil = $request->asal_mobil;
        $cars = Mobil::find($id);
        $sekarang = Carbon::now();
        $nama = Auth::user()->name;
        $id_user = Auth::user()->id;
        $id_mobil = $cars->id_mobil;
        $hp = Auth::user()->no_hp;
        $plat = $request->no_plat;
        $mobil = $request->nama_mobil;
        $alamat = $request->alamat;
        $in = $request->booking_in;
        $ins = Carbon::parse($in);
        $out = $request->booking_out;
        $outs = Carbon::parse($out);
        $pesan = $request->pesan;
        $image = $cars->gambar;
        // dd($ins, $outs);
        // dd($id_mobil);

        // if($ins->isBefore($sekarang)){
        //     return back()->with(['warning'=>"Tanggal tidak dapat di input,tanggal sudah kadaluarsa"]);
        // }
        // if($outs->isBefore($sekarang)){
        //     return back()->with(['warning'=>"Tanggal tidak dapat di input,tanggal sudah kadaluarsa"]);
        // }

        $data = [
            'id_user'=>$id_user,
            'id_mobil'=>$id_mobil,
            'nama_pemesan'=>$nama,
            'no_hp'=>$hp,
            'asal_mobil'=>$asal_mobil,
            'nama_mobil'=>$mobil,
            'alamat'=>$alamat,
            'booking_in'=>$in,
            'booking_out'=>$out,
            'pesan'=>$pesan,
            'image'=>$image,
            'bukti_dp'=>$namafile,
            'jumlah_unit'=>$jumlah_unit

        ];

        $idPemesanan = DB::table('pemesanan')->insertGetId($data);
        $format = "H O R A S M A R S A D A T R I P\nNo.Pesanan: $idPemesanan\nNama : $nama\nNo.Hp : $hp\nAlamat :$alamat\nIngin memesan mobil :$mobil\nJumlah Unit: $jumlah_unit\n Tanggal berangkat : $in\nTanggal Kembali :$out\nTerimakasih";


        $apiUrl = "https://api.whatsapp.com/send?phone=+6285373566250&text=" . urlencode($format);

        return redirect($apiUrl);


    }
}
