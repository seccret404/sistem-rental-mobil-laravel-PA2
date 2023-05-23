<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $fillable = [
        'nama_mobil',
        'lokasi',
        'no_plat',
        'kapasitas'
    ];
    protected $primaryKey = 'id_mobil';
}
