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
        $idPemesanan = DB::table('pemesanan')->where('id_pesanan', $id)->first();
        return view('AdminPage.detail', compact('idPemesanan'));
    }

    public function status($idPemesanan) {
        Pemesanan::where('id_pesanan', $idPemesanan)
        ->update(['status' => 1]);

        return redirect()->route('pemesanan')->with('success', 'Pemesanan berhasil dikonfirmasi');
    }

    public function history() {
        $pesanans = Pemesanan::where('id_user', Auth::user()->id)->get()->sortByDesc('updated_at');

        return view('history-book', compact('pesanans'));
    }
}
