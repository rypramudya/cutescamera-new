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
        Schema::create('tabel_pengembalian', function (Blueprint $table) {
            $table->id('id_pengembalian');
            $table->string('id_pinjam');
            $table->string('nama_penyewa');
            $table->enum('status', ['Sudah dikembalikan', 'Belum dikembalikan']);
            $table->string('kondisi_barang');
            $table->string('id_transaksi');
            $table->date('tanggal_sewa');
            $table->string('rating');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pengembalian');
    }
};