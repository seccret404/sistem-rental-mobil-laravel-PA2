<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index() {
        $pemesananList = Pemesanan::all();
        return view('AdminPage.pemesanan', compact('pemesananList'));
    }

    public function detail($id) {
        if (!auth()->check()) {
            return redirect()->route('login')->with('redirectPath', route('barang.index'));
        }

        $idPemesanan = DB::table('pemesanan')->where('id_pesanan', $id)->first();
        return view('AdminPage.detail', compact('idPemesanan'));
    }

    public function status(Request $request,$idPemesanan) {

        

        $id_pesanan = $request->id_pesanan;
        $namaPemesan = $request->namaPemesan;
        $namaMobil = $request->namaMobil;
        $boIn = $request->boIn;
        $boOut = $request->boOut;
        $hargaHari = $request->hargaHari;
        $totalHari = $request->totalHari;
        $jumlahUnit = $request->jumlahUnit;
        $asalSopir = $request->asalSopir;
        $namaSopir = $request->namaSopir;
        $asalMobil = $request->asalMobil;
        $total = $request->totalHargaBeli;
        $pengeluaran = $request->pengeluaran;
        $catatan = $request->catatan;
        $diskon = $request->diskon;
        $data = [
            'id_pesanan'=>$id_pesanan,
            'nama_rentaler'=>$namaPemesan,
            'nama_mobil'=>$namaMobil,
            'harga_perhari'=>$hargaHari,
            'jmlh_hari'=>$totalHari,
            'jmlh_unit'=>$jumlahUnit,
            'diskon'=>$diskon,
            'asal_unit'=>$asalMobil,
            'asal_sopir'=>$asalSopir,
            'nama_sopir'=>$namaSopir,
            'pengeluaran'=>$pengeluaran,
            'deskripsi'=>$catatan,
            'profit'=>2,
            'toal_harga_beli'=>$total
        ];



        $simpan = DB::table('administrasi')->insert($data);
        if($simpan){
                Pemesanan::where('id_pesanan', $idPemesanan)
        ->update(['status' => 1]);

        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil dikonfirmasi');

        }else{
        return redirect()->route('pemesanan')->with('error', 'Gagal Untuk Memproses Data');

        }

    }

    public function deteteOrder($idPemesanan){
        Pemesanan::where('id_pesanan',$idPemesanan)->update(['status'=>5]);

        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil Ditolak');
    }

    public function history() {
        $pesanans = Pemesanan::where('id_user', Auth::user()->id)->get()->sortByDesc('updated_at');

        return view('history-book', compact('pesanans'));
    }
}
