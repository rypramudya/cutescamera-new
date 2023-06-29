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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //primary key nya
            $table->string('nama');
            $table->string('email')->unique(); //email harus unik tidak boleh sama
            $table->timestamp('email_verified_at')->nullable(); //data dibiarkan kosong
            $table->string('password');
            $table->string('role'); //nambah tami
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};