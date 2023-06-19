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
            $table->string('nama_mobil');
            $table->bigInteger('id_pesanan')->unsigned()->index()->nullable();
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pemesanan')->onDelete('cascade');
            $table->string('jmlh_hari');
            $table->string('jmlh_unit');
            $table->string('diskon')->nullable();
            $table->string('harga_perhari');
            $table->string('toal_harga_beli');
            $table->string('asal_unit');
            $table->string('asal_sopir');
            $table->string('nama_sopir');
            $table->string('profit');
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
