<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('spotify_id')->unique();
            $table->string('title', 120);
            $table->string('spotify_uri')->unique();
            $table->string('image_url');
            $table->timestamps();
        });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('podcasts');
    }
};