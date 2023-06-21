<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Mobil;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{

    public function mobil(){
        $mobil = Mobil::all();
        return view('AdminPage.mobil',compact('mobil'));
    }

    public function mobiladd(Request $request){
        $request->validate([
            'nama_mobil' => ['required','max:8000'],
            'lokasi'=>['required'],
            'asal_mobil'=>['required'],
            'kapasitas'=>['required'],
            'tipe_mobil'=>['required'],
            'ac'=>['required'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',

        ]);
        // return $request;
        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/mobil';
        $file->move($tujuanFile,$namafile);

        $mobil = new Mobil;
        $mobil->id_mobil = $request->id_mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->lokasi = $request->lokasi;
        $mobil->asal_mobil = $request->asal_mobil;
        $mobil->harga_perhari = $request->harga_perhari;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->tipe_mobil = $request->tipe_mobil;
        $mobil->ac = $request->ac;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->gambar = $namafile;
        $mobil->save();

        // $bookingIn = Carbon::now();
        // $bookingOut = Carbon::now();

        // $pemesanan = new Pemesanan;
        // $pemesanan->id_mobil = $mobil->id_mobil;
        // $pemesanan->nama_pemesan = "";
        // $pemesanan->asal_mobil = "";
        // $pemesanan->harga_perhari = "";
        // $pemesanan->total_harga_beli = "";
        // $pemesanan->asal_sopir = "";
        // $pemesanan->bukti_dp = "";
        // $pemesanan->jumlah_unit = "";
        // $pemesanan->nama_mobil = "";
        // $pemesanan->no_hp = "";
        // $pemesanan->alamat = "";
        // $pemesanan->booking_in = $bookingIn;
        // $pemesanan->booking_out = $bookingOut;
        // $pemesanan->pesan = "";
        // $pemesanan->image = "";
        // $pemesanan->status = 9;
        // $pemesanan->save();

        return redirect('/mobil')->with(['success'=>"Mobil berhasil ditambah"]);
}

        public function edit($id_mobil){

            $mobiledit = Mobil::find($id_mobil);

            return view('AdminPage.editmobil',compact('mobiledit'));
        }

        public function editpros(Request $request, $id_mobil)
        {
            $mobil = Mobil::find($id_mobil);
            $mobil->update($request->all());

            return redirect('/mobil')->with(['success'=> "Mobil Berhasil Di Update!"]);
        }


        public function delete($id_mobil){
            $mobil = Mobil::find($id_mobil);

            if ($mobil) {
                $mobil->delete(); // Use the delete() method provided by Eloquent

                return redirect('/mobil')->with(['success' => "Mobil Berhasil Di Hapus!"]);
            } else {
                return redirect('/mobil')->with(['error' => "Gagal Di Hapus!"]);
            }
        }

}
