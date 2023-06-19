<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pemesanan;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $tp = DB::table('administrasi')->sum('pengeluaran');
        $data = DB::table('pemesanan')->latest()->get();
        $profit = DB::table('administrasi')->sum('profit');
        $mobil = Mobil::count();
        $pemesanan = Pemesanan::where('status',1)->count();
        return view('AdminPage.dashboard',compact('tp','data','profit','mobil','pemesanan'));
    }



    public function administrasi(){
        return view('AdminPage.administrasi');
    }

    public function testimoni(){
        $tes = Testimoni::all();
        $pemesanan = Pemesanan::latest()->get();
        return view('AdminPage.testimoni',compact('tes','pemesanan'));
    }

    public function deletetes($id){
        $delete = DB::table('testimoni')->where('id', $id)->delete();

        if($delete){
            return redirect('/testimoni')->with(['success'=> "Testimoni Berhasil Di Hapus!"]);

        }else{
            return redirect('/testimoni')->with(['error'=> "Gagal Di Hapus!"]);

        }
    }

    public function feed(){
        $feed = DB::table('feedback')->get();
        return view('AdminPage.feed',compact('feed'));
    }

    public function delete($id_feed){
        $delete = DB::table('feedback')->where('id_feed', $id_feed)->delete();

        if($delete){
            return redirect('/feedback')->with(['success'=> "Feedback Berhasil Di Hapus!"]);

        }else{
            return redirect('/feedback')->with(['error'=> "Gagal Di Hapus!"]);

        }
        }

}
