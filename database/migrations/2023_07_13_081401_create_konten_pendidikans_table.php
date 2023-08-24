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
        Schema::create('konten_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendidikan')->constrained('pendidikans');
            $table->string('gambar');
            $table->string('sejarah');
            $table->string('visi');
            $table->string('misi');
            $table->string('tujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konten_pendidikans');
    }
};
