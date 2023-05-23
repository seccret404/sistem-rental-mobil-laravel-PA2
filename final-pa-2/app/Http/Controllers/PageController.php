<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        $moni = Testimoni::all();
        $tes = Mobil::paginate(3);
        return view('index',compact('tes','moni'));
    }

    public function about(){
        return view('about');
    }

    public function list(){
        $moni = Testimoni::all();
        $tes = Mobil::all();
        return view('listing',compact('tes','moni'));
    }
    public function test(){
        $tes = Mobil::all();
        return view('testimonials',compact('tes'));
    }

    public function contact(){
        $nama = Auth::user()->name;
        $email = Auth::user()->email;
        return view('contact',compact('nama','email'));
    }

    public function adfed(Request $request){
        $id_user = Auth::user()->id;
        $nama = Auth::user()->name;
        $email = Auth::user()->email;
        $pesanku = $request->pesanku;

        $data = [
            'id_user'=>$id_user,
            'nama'=>$nama,
            'email'=>$email,
            'pesanku'=>$pesanku
        ];

        $simpan = DB::table('feedback')->insert($data);

        return redirect('/contact')->with(['success'=>"Feedback Berhasil Di Kirim!"]);
    }


}
