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
        Schema::create('profil_desa_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profil_desa_id')->constrained('profil_desa')->onDelete('cascade');
            $table->enum('tipe', ['informasi_umum', 'kondisi_potensi', 'visi_misi']);
            $table->string('judul')->nullable();
            $table->longText('isi')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_desa_sections');
    }
};
