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
        Schema::create('tabel_pembayaran', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->string('id_pinjam');
            $table->integer('no_booking')->default(0);
            $table->integer('foto_buktibayar')->nullable();
            $table->enum('status_pembayaran', ['Sudah dibayar', 'Belum dibayar']);
            $table->integer('total_bayar')->default(0);
            $table->enum('jenis_pembayaran', ['Transfer', 'Bayar di tempat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pembayaran');
    }
};