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

    public function addbooking(Request $request){
        $sekarang = Carbon::now();
        $nama = Auth::user()->name;
        $id_user = Auth::user()->id;
        $hp = Auth::user()->no_hp;
        $plat = $request->no_plat;
        $mobil = $request->nama_mobil;
        $alamat = $request->alamat;
        $in = $request->booking_in;
        $out = $request->booking_out;
        $pesan = $request->pesan;

        if($in < $sekarang){
            return back()->with(['warning'=>"Tanggal tidak dapat di input,tanggal sudah kadaluarsa"]);
        }
        if($out < $sekarang){
            return back()->with(['warning'=>"Tanggal tidak dapat di input,tanggal sudah kadaluarsa"]);
        }

        $data = [
            'id_user'=>$id_user,
            'nama_pemesan'=>$nama,
            'no_hp'=>$hp,
            'no_plat'=>$plat,
            'nama_mobil'=>$mobil,
            'alamat'=>$alamat,
            'booking_in'=>$in,
            'booking_out'=>$out,
            'pesan'=>$pesan
        ];

        $idPemesanan = DB::table('pemesanan')->insertGetId($data);
        $format = "H O R A S M A R S A D A T R I P\nNo.Pesanan: $idPemesanan\nNama : $nama\nNo.Hp : $hp\nAlamat :$alamat\nIngin memesan mobil :$mobil\nTanggal berangkat : $in\nTanggal Kembali :$out\nTerimakasih";


        $apiUrl = "https://api.whatsapp.com/send?phone=+6285373566250&text=" . urlencode($format);

        return redirect($apiUrl);


    }
}
