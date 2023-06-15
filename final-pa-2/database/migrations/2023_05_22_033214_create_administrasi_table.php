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
            $table->string('dana_dp')->nullable();
            $table->string('jmlh_hari');
            $table->string('jmlh_unit');
            $table->string('harga_jual');
            $table->string('diskon')->nullable();
            $table->string('harga_beli');
            $table->string('asal_unit');
            $table->string('sopir');
            $table->string('profit');
            $table->string('type');
            $table->string('tharga_jual');
            $table->string('tharga_beli');
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
