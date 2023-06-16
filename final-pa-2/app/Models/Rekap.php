<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $table = 'administrasi';
    protected $fillable = [
        'nama_rentaler',
        'nama',
        'dana_dp',
        'jmlh_hari',
        'jmlh_unit',
        'harga_jual',
        'diskon',
        'asal_unit',
        'harga_beli',
        'pengeluaran',
        'sopir',
        'profit',
        'deskripsi',
        'type',
        'tharga_jual',
        'tharga_beli',
        'pengeluaran',
    ];
    protected $primaryKey = 'id';
}
