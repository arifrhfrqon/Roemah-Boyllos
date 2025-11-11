<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_lkps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lkp');
            $table->text('deskripsi');
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('fitur')->nullable();
            $table->string('foto')->nullable();
            $table->string('program_name'); // nama program
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_lkps');
    }
};
