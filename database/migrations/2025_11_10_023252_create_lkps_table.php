<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lkps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program');      // Nama program pelatihan
            $table->text('deskripsi')->nullable();
            $table->string('thumbnail')->nullable(); // Banner / gambar program
            $table->string('durasi')->nullable();    // ex: 3 Bulan
            $table->string('biaya')->nullable();     // ex: Rp 350.000
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lkps');
    }
};
