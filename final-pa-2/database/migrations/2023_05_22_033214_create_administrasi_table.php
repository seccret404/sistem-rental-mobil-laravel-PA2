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
        Schema::create('administrasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rentaler');
            $table->string('nama');
            $table->string('dana_dp');
            $table->string('harga_jual');
            $table->string('asal_unit');
            $table->string('sopir');
            $table->string('tipe_mobil');
            $table->string('harga_beli');
            $table->string('pengeluaran');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrasi');
    }
};
