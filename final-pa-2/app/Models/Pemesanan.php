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
        'id_pesanan ',
        'id_user',
        'id_mobil',
        'nama_pemesan',
        'no_plat',
        'nama_mobil',
        'no_hp',
        'alamat',
        'booking_in',
        'booking_out',
        'pesan',
        'status',
        'image'
    ];

    public function cars() {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id_mobil');
    }
}
