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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendidikan')->constrained('pendidikans');
            $table->string('nama_sekolah');
            $table->integer('npsn');
            $table->string('status_sekolah');
            $table->string('akreditasi');
            $table->string('alamat_sekolah');
            $table->string('no_telepon');
            $table->string('no_fax');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
