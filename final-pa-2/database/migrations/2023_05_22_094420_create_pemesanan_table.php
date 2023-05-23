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
            $table->integer('id_user');
            $table->string('nama_pemesan');
            $table->string('no_plat');
            $table->string('nama_mobil');
            $table->string('no_hp');
            $table->string('alamat');
            $table->date('booking_in');
            $table->date('booking_out');
            $table->string('pesan');
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
