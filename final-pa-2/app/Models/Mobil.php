<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'mobil';
    protected $fillable = [
        'nama_mobil',
        'lokasi',
        'asal_mobil',
        'kapasitas',
        'harga_perhari'
    ];
    protected $primaryKey = 'id_mobil';

    public function pemesanans() {
        return $this->hasOne(Pemesanan::class, 'id_mobil', 'id_mobil');
    }
}
