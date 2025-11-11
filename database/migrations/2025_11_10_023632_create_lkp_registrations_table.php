<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lkp_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('whatsapp');
            $table->string('program');
            $table->text('address')->nullable();
            $table->string('status_pendaftaran')->default('pending'); // kolom status default pending
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lkp_registrations');
    }
};
