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
        'dana_dp',
        'harga_jual',
        'asal_unit',
        'harga_beli',
        'pengeluaran',
        'sopir',
        'deskripsi'
    ];
    protected $primaryKey = 'id';
}
