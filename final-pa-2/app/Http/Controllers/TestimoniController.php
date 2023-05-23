<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    public function addtestimoni(Request $request){
        $request->validate([
            'nama_pelanggan' => ['required','max:8000'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|',
            'deskripsi' => 'required',
        ]);

        $file = $request->file('gambar');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'asset/testimoni';

        $file->move($tujuanFile,$namafile);

        $newMobil = new Testimoni;
        $newMobil->nama_pelanggan = $request->nama_pelanggan;
        $newMobil->gambar = $namafile;
        $newMobil->deskripsi = $request->deskripsi;
        $newMobil->save();
        return redirect('/testimoni')->with(['success'=>"Data berhasil ditamabh"]);
        }



}

