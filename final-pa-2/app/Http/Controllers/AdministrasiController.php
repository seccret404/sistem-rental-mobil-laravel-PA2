<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrasiController extends Controller
{

    public function administrasi(){
        $nama = DB::table('mobil')->get();
        $admin = DB::table('administrasi')->get();
        $tp = DB::table('administrasi')->sum('pengeluaran');
        $profit = DB::table('administrasi')->sum('profit');

        return view('AdminPage.administrasi',compact('nama','admin','tp','profit'));
    }

    public function adpros(Request $requset){
        $costumer = $requset->nama_rentaler;
        $mobil = $requset->nama;
        $dp = $requset->dana_dp;
        $hj = $requset->harga_jual;
        $as = $requset->asal_unit;
        $tm = $requset->tipe_mobil;
        $sopir = $requset->sopir;
        $hb = $requset->harga_beli;
        $p = $requset->pengeluaran;
        $des = $requset->deskripsi;
        $profit = $hj - $p;

        $data = [
            'nama_rentaler'=>$costumer,
            'nama'=>$mobil,
            'dana_dp'=>$dp,
            'harga_jual'=>$hj,
            'asal_unit'=>$as,
            'profit'=>$profit,
            'sopir'=>$sopir,
            'tipe_mobil'=>$tm,
            'harga_beli'=>$hb,
            'pengeluaran'=>$p,
            'deskripsi'=>$des

        ];

        $simpan = DB::table('administrasi')->insert($data);
        if($simpan){
            return redirect('/administrasi')->with(['success'=>"Administrasi Berhasil Ditambahkan"]);

        }else{
            return redirect('/administrasi')->with(['error'=>" Gagal Menambahkan Data!"]);
        }
    }

    public function edit($id){

        $admin = Rekap::find($id);

        return view('AdminPage.editadministrasi',compact('admin'));
    }

    public function editpros(Request $request, $id){
        $rekap = Rekap::find($id);
        $rekap->update($request->all());

        return redirect('/administrasi')->with(['success'=> "Mobil Berhasil Di Update!"]);
    }

    public function delete($id){
        $delete = DB::table('administrasi')->where('id', $id)->delete();

        if($delete){
            return redirect('/administrasi')->with(['success'=> "Data Berhasil Di Hapus!"]);

        }else{
            return redirect('/administrasi')->with(['error'=> " Data Gagal Di Hapus!"]);

        }
        }
}
