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
        Schema::table('tabel_peminjaman', function (Blueprint $table) {
            // $table->foreignId('kamera_id')->constrained('tabel_kamera','id_kamera');
            // $table->foreignId('detail_user_id')->constrained('detail_pengguna','id');
            $table->uuid('kamera_id')->after('id_pinjam');
            $table->foreign('kamera_id')->references('id_kamera')->on('tabel_kamera');
            $table->unsignedBigInteger('user_id')->after('kamera_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tabel_peminjaman', function (Blueprint $table) {
            $table->dropForeign('id_kamera_foreign_tabel_peminjaman');
            $table->dropColumn('kamera_id');
            $table->dropForeign('id_detail_user_foreign_tabel_peminjaman');
            $table->dropColumn('detail_user_id');
        });
    }
};