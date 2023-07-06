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
        Schema::create('tabel_kamera', function (Blueprint $table) {
            $table->uuid('id_kamera')->primary();
            $table->string('nama_kamera');
            $table->string('keterangan');
            $table->integer('harga_sewa')->default(0);
            $table->integer('stok_kamera')->default(0);
            $table->string('type_kamera');
            $table->string('image_kamera')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kameras');
    }
};