<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
          Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('preview');
            $table->string('gambar'); // Menambahkan kolom gambar
            $table->text('deskripsi');
            $table->timestamps(); // Memelihara kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenges');
    }
};