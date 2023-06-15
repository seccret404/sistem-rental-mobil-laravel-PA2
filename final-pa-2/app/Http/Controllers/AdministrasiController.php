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

    public function adpros(Request $request){
        $costumer = $request->nama_rentaler;
        $mobil = $request->nama;
        $dp = $request->dana_dp;
        $hb = $request->harga_beli;
        $hj = $request->harga_jual;
        $thj = $request->tharga_jual;
        $thb = $request->tharga_beli;
        $as = $request->asal_unit;
        $jumlah_unit = $request->jmlh_unit;
        $jumlah_hari = $request->jmlh_hari;
        $tipe = $request->tipe;
        $sopir = $request->sopir;
        $hb = $request->harga_beli;
        $p = $request->pengeluaran;
        $des = $request->deskripsi;
        $profit = 0;
        $diskon = $request->diskon;
        $tdiskon = $diskon/100;

        $data = [
            'nama_rentaler'=>$costumer,
            'nama'=>$mobil,
            'dana_dp'=>$dp,
            'harga_jual'=>$hj,
            'harga_beli'=>$hb,
            'asal_unit'=>$as,
            'jmlh_unit'=>$jumlah_unit,
            'jmlh_hari'=>$jumlah_hari,
            'profit'=>$profit,
            'sopir'=>$sopir,
            'type'=>$tipe,
            'diskon'=>$diskon,
            'tharga_beli'=>$thb,
            'tharga_jual'=>$thj,
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
