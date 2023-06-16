<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use PDF;
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
        $spr = $request->sopir;
        $hb = $request->harga_beli;
        $p = $request->pengeluaran;
        $des = $request->deskripsi;
        $diskon = $request->diskon;

        $totalbeli = $jumlah_hari * $jumlah_unit * $hb;
        $totaljual = $jumlah_hari * $jumlah_unit * $hj;
        $tdiskon = ($diskon/100)*$totaljual;
        $fdiskon = $totaljual - $tdiskon;

        $profit = $fdiskon - $p;

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
            'sopir'=>$spr,
            'type'=>$tipe,
            'diskon'=>$diskon,
            'tharga_beli'=>$totalbeli,
            'tharga_jual'=>$fdiskon,
            'pengeluaran'=>$p,
            'deskripsi'=>$des
        ];
      
        $simpan = Rekap::create($data);
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

    public function pdf() {
        // return view('AdminPage.invoice');
        $administrasi = Rekap::all();
        $pdf = PDF::loadView('AdminPage.invoice', ['administrasi' => $administrasi]);
        return $pdf->download('invoice.pdf');
    }
}
