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
            $table->uuid('id_pinjam')->primary();
            $table->integer('total_harga')->default(0);
            $table->string('bukti_bayar');
            $table->enum('status',['Pending','Accept','Denied']);
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