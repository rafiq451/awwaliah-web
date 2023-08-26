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
        Schema::create('makna_logos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendidikan')->constrained('pendidikans');
            $table->text('makna_bentuk');
            $table->text('makna_warna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makna_logos');
    }

};
