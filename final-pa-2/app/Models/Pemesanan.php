<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'status'
    ];
}
