<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabel_peminjaman', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->string('id_kamera');
            $table->string('nama_penyewa');
            $table->integer('harga_sewa')->default(0);
            $table->timestamps();
        });
        // //relasi ke tabel prodi
        //  Schema::table('tabel_peminjaman', function (Blueprint $table) {
        //     $table->foreign('id_kamera')->references('id')->on('tabel_kamera')->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_peminjaman');
    }
};