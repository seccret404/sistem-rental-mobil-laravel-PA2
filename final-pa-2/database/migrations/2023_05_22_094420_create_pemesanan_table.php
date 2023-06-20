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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->bigInteger('id_user')->unsigned()->index()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_mobil')->unsigned()->index()->nullable();
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil')->onDelete('cascade');
            $table->string('nama_pemesan');
            $table->string('asal_mobil');
            $table->string('asal_sopir');
            $table->string('bukti_dp');
            $table->string('jumlah_unit');
            $table->string('nama_mobil');
            $table->string('no_hp');
            $table->string('alamat');
            $table->date('booking_in');
            $table->date('booking_out');
            $table->string('pesan');
            $table->string('image');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
