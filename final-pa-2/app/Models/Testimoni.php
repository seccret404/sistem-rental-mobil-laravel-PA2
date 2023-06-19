<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $table = 'testimoni';
    protected $fillable = [
        'nama_pelanggan',
        'deskripsi',
        'gambar'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pesanan');
    }
}
