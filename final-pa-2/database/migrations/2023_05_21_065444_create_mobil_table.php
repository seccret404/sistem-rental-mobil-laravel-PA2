<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id('id_mobil');
            $table->string('nama_mobil');
            $table->string('lokasi');
            $table->string('harga_perhari');
            $table->string('asal_mobil');
            $table->string('ac');
            $table->string('tipe_mobil');
            $table->string('kapasitas');
            $table->string('gambar');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
