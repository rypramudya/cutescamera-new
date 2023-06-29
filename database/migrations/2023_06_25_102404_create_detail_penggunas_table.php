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
        Schema::create('detail_penggunas', function (Blueprint $table) {
            $table->id(); //primary key nya
            $table->foreignId('user_id')->constrained();
            $table->string('nik')->unique();
            $table->string('nohp');
            $table->string('alamat');
            $table->string('fotobersamaid');
            $table->string('fotoid');
            $table->enum('jenisid',['KTP','KK','KARTU PELAJAR/MAHASISWA','SIM']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penggunas');
    }
};
