<?php

namespace App\Models;

use App\Models\Mobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $fillable = [
        'id_pesanan',
        'bukti_dp',
        'id_user',
        'id_mobil',
        'nama_pemesan',
        'asal_mobil',
        'harga_perhari',
        'total_harga_beli',
        'nama_mobil',
        'asal_sopir',
        'no_hp',
        'alamat',
        'booking_in',
        'booking_out',
        'pesan',
        'status',
        'image',
        'bukti_dp',
    ];

    public function cars() {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id_mobil');
    }
}
