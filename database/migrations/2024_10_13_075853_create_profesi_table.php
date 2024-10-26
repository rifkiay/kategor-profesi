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
        Schema::create('profesi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori_profesi')->constrained('kategori_profesi')->onDelete('cascade');
            $table->string('nama_profesi');
            $table->text('deskripsi_profesi');
            $table->text('keterampilan');
            $table->string('gaji');
            $table->text('gambar_profesi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesi');
    }
};